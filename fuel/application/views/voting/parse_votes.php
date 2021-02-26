<head>
      	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>Votes Parsing</title>
    <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />

    <meta content = "text/html; charset = ISO-8859-1" http-equiv = "content-type">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



    <!--<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">  
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>

    
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
   
    <script type="text/javascript">

        $(document).ready(function()
            {
               
                str = "yes";
                var jobj = {};
                var timeseries = {};
                var timemoment = {
                    trumpvotes : 0,
                    bidenvotes : 0,
                };
                var timemoments = [];
                var total_count = "";
                var start = "";
                var count = "";
                var results = {};
                var result_ids = [];
                var facets = {};
                var rows = {};
                var xmlhttp = new XMLHttpRequest();
                var myLineChart = null;
                var myLineChart2 = null;
                var myLineChart3 = null;
                var myLineChart4 = null;
                var myPieChart = null;
                var myStackedChart = null;
                var myStackedChart2 = null;
                var voterows = [];
                var racedata = {};
               // var table = '';


                //var getdata =  xmlhttp.onreadystatechange = function() {
                var state = 'michigan';
                var state_url='https://static01.nyt.com/elections-assets/2020/data/api/2020-11-03/race-page/'+ state.toLowerCase().replace(/\-/,'') + '/president.json';
                $.ajax({url: state_url, success: function(result){          
                        jobj = result;
                        timeseries = jobj.data.races[0].timeseries;
                        console.log(jobj);
                        race_data = {
                            "race_id": jobj.data.races[0].race_id,
                            "race_slug": jobj.data.races[0].race_slug,
                            "url": jobj.data.races[0].url 
                        };

                        console.log("Race Data:", race_data);
                        console.log(timeseries);                  
                        vue_obj();         
            }});
    
        function vue_obj(){
                                
                        // Vue Object
                        vm = new Vue({
                        el: '#results_table',
                        data: {
                            test: "This is a Test",
                            headers : ["Index","Biden %","Biden Votes","Trump %","Trump Votes","Other Votes","Time Stamps","Votes", "Votes Added","Trump Added","Biden Added","% of Remaining Biden","% of Remaining Trump"],
                            tlheaders: ["Biden Votes","Biden Vote Increase","1st Index","2nd Index", "Other Votes","Time1","Time2","1st Trump Votes","2nd Trump Votes",
                                        "Trump Vote Loss","Accumulated Trump Vote Loss","Votes Increase + Trump Loss","Last Vote Total", "Overall Vote Increase"],

                            blheaders: ["Trump Votes","Trump Vote Increase","1st Index","2nd Index", "Other Votes","1st Biden Votes","2nd Biden Votes",
                                        "Biden Vote Loss","Accumulated Biden Vote Loss","Votes Increase + Biden Loss","Last Vote Total", "Overall Vote Increase"],     
                            states: ["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho",
                                        "Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota",
                                        "Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Carolina",
                                        "North Dakota","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee",
                                        "Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"],    
                            sorts: ["Time Stamps","Cumulative Vote Totals"],  
                            row: '',
                            header: '',
                            cell:'',
                            itr: '',
                            vote_rows: voterows,
                            race_info: race_data,
                            selectedindex: 0,
                            trump_votes_decrease: [],
                            biden_votes_decrease: [],
                            total_biden_increase: 0,
                            trump_voteloss: 0,
                            biden_voteloss: 0,
                            date_headers: [],
                            datedata_biden: [],
                            datedata_trump: [],
                            datedata_biden_add: [],
                            datedata_trump_add: [],
                            datedata_biden_diff_add: [],
                            datedata_trump_diff_add: [], 
                            datedata_other: [],
                            datedata_other_add: [],
                            datedata_total_add: [],
                            bin_headers: [],
                            bin_trump: [],
                            bin_biden: [],
                            biden_slices: [],
                            trump_slices: [],
                            other_slices: [],
                            total_slices: [],
                            dateheaders_store: [],
                            datedatabiden_store: [],
                            datedatabidenadd_store: [],
                            datedatabidenadddiff_store: [],
                            datedatatrump_store: [],
                            datedatatrumpadd_store: [],
                            datedatatrumpadddiff_store: [],
                            datedataother_store: [],
                            datedataotheradd_store: [],
                            datedatatotaladd_store: [],
                            datedatatotal_store: [],
                            perremainingtrump_store: [],
                            perremainingbiden_store:[],
                            parse_interval: 10,
                            pie_headers: [],
                            the_pieheader:null,
                            the_stackedheader:null,
                            state_selected:'Michigan',
                            sort_selected:'Time Stamps',
                            selected:'1 Times',
                            ttable:'',                           
                            vote_bins: [],
                            number_pages: 0,
                            step: 0,
                            table:'',
                            
                        },

                        watch:{
                            selected: function(val){
                                this.parse_interval = parseInt(val.replace('Times','').trim())*10;
                                this.parse_vote();
                                this.linechart();
                                this.linechart2();
                                this.linechart3();
                                this.linechart4();
                                this.piechart();
                                this.stackedchart();
                                this.fill_votebins();
                                this.stackedchart2();
                                
                               
                            },
                            number_pages: function(val){
                                console.log("Number of Pages: ", val);                               
                                this.parse_vote();
                            },
                           
                            state_selected : function(val){
                                $("#results_table").css("display","none");
                                
                                this.start_tables(val,this.sort_selected);   
                            },
                            sort_selected : function(val){
                                $("#results_table").css("display","none");
                                
                                this.start_tables(this.state_selected,val);   
                            },
                            vote_rows: function(val){
                               
                               /* this.parse_vote();
                                this.linechart();
                                this.linechart2();
                                this.linechart3();
                                this.piechart();
                                this.fill_votebins();
                                this.stackedchart2();
                                this.stackedchart();
                                */
                               
                            }

                        },
                                                 
                        mounted: function() {                           
                            this.start_tables(this.state_selected,this.sort_selected);       

                            var this2 = this;
                            //console.log("This2: ", this2.$el);
                           

                           
                            $('#lineChart').on('click',function(){
                            
                                if($(this2.$el).find('#flinec').hasClass('col-sm-12')){
                                    //$(this).parent().parent().find('#flinec').removeClass('col-sm-12').addClass('col-sm-4');
                                    $(this2.$el).find('#flinec').removeClass('col-sm-12').addClass('col-sm-4');
                                    $(this2.$el).find('#fpiec').add('#fstackedc').add('#flinecnew').add('#flinecdiff').add('#fstackedcbin').add('#flinecper').show();
                                } 
                                else{
                                    $(this2.$el).find('#fpiec').add('#fstackedc').add('#flinecnew').add('#flinecdiff').add('#fstackedcbin').add('#flinecper').hide();
                                    $(this2.$el).find('#flinec').removeClass('col-sm-4').addClass('col-sm-12').append($('#example_paginate'));
                                }
                            });

                            $('#newlineChart').on('click',function(){
                            
                                if($(this2.$el).find('#flinecnew').hasClass('col-sm-12')){
                                    $(this2.$el).find('#flinecnew').removeClass('col-sm-12').addClass('col-sm-4');
                                    $(this2.$el).find('#fpiec').add('#fstackedc').add('#flinec').add('#flinecdiff').add('#fstackedcbin').add('#flinecper').show();
                                } 
                                else{
                                    $(this2.$el).find('#fpiec').add('#fstackedc').add('#flinec').add('#flinecdiff').add('#fstackedcbin').add('#flinecper').hide();
                                    $(this2.$el).find('#flinecnew').removeClass('col-sm-4').addClass('col-sm-12');
                                }
                            }); 

                            $('#diffLineChart').on('click',function(){
                            
                                if($(this2.$el).find('#flinecdiff').hasClass('col-sm-12')){
                                    $(this2.$el).find('#flinecdiff').removeClass('col-sm-12').addClass('col-sm-4');
                                    $(this2.$el).find('#fpiec').add('#fstackedc').add('#flinec').add('#flinecnew').add('#fstackedcbin').add('#flinecper').show();
                                } 
                                else{
                                    $(this2.$el).find('#fpiec').add('#fstackedc').add('#flinec').add('#flinecnew').add('#fstackedcbin').add('#flinecper').hide();
                                    $(this2.$el).find('#flinecdiff').removeClass('col-sm-4').addClass('col-sm-12');
                                }
                            }); 


                            $('#perLineChart').on('click',function(){
                            
                                if($(this2.$el).find('#flinecper').hasClass('col-sm-12')){
                                    $(this2.$el).find('#flinecper').removeClass('col-sm-12').addClass('col-sm-4');
                                    $(this2.$el).find('#fpiec').add('#fstackedc').add('#flinec').add('#flinecnew').add('#fstackedcbin').add('#flinecdiff').show();
                                } 
                                else{
                                    $(this2.$el).find('#fpiec').add('#fstackedc').add('#flinec').add('#flinecnew').add('#fstackedcbin').add('#flinecdiff').hide();
                                    $(this2.$el).find('#flinecper').removeClass('col-sm-4').addClass('col-sm-12');
                                }
                            }); 


                            $('#pieChart').on('click',function(){
                                //alert('ok');
                                if($('#fpiec').hasClass('col-sm-12')){
                                    $('#fpiec').removeClass('col-sm-12').addClass('col-sm-4');
                                    $('#flinec').add('#fstackedc').add('#flinecnew').add('#flinecdiff').add('#fstackedcbin').add('#flinecper').show();
                                } 
                                else{
                                    $('#flinec').add('#fstackedc').add('#flinecnew').add('#flinecdiff').add('#fstackedcbin').add('#flinecper').hide();
                                    $('#fpiec').removeClass('col-sm-4').addClass('col-sm-12');
                                }
                            });
                        
                            $('#stackedChart').on('click',function(){
                                //alert('ok');
                                if($('#fstackedc').hasClass('col-sm-12')){
                                    $('#fstackedc').removeClass('col-sm-12').addClass('col-sm-4');
                                    $('#flinec').add('#fpiec').add('#flinecnew').add('#flinecdiff').add('#fstackedcbin').add('#flinecper').show();
                                } 
                                else{
                                    $('#flinec').add('#fpiec').add('#flinecnew').add('#flinecdiff').add('#fstackedcbin').add('#flinecper').hide();
                                    $('#fstackedc').removeClass('col-sm-4').addClass('col-sm-12');
                                }
                            });

                            $('#binStackedChart').on('click',function(){
                                //alert('ok');
                                if($('#fstackedcbin').hasClass('col-sm-12')){
                                    $('#fstackedcbin').removeClass('col-sm-12').addClass('col-sm-4');
                                    $('#flinec').add('#fpiec').add('#flinecnew').add('#flinecdiff').add('#fstackedc').add('#flinecper').show();
                                } 
                                else{
                                    $('#flinec').add('#fpiec').add('#flinecnew').add('#flinecdiff').add('#fstackedc').add('#flinecper').hide();
                                    $('#fstackedcbin').removeClass('col-sm-4').addClass('col-sm-12');
                                }
                            });
                                
                        },
                      
                        methods: {
                            // Mapping Function Used for calculating when vote total decreases and the accumulation
                            get_data: function(state,selected_sort){
                                var this2 = this;                            
                                var state_url='https://static01.nyt.com/elections-assets/2020/data/api/2020-11-03/race-page/'+ state.toLowerCase().replace(/\-/,'') + '/president.json';
                                $.ajax({url: state_url, success: function(result){
                                    jobj = result;  // Get Vote Data from text file in JSON form

                                    timeseries = jobj.data.races[0].timeseries;
                                    console.log(jobj);
                                    this2.race_info = {
                                        "race_id": jobj.data.races[0].race_id,
                                        "race_slug": jobj.data.races[0].race_slug,
                                        "url": jobj.data.races[0].url 
                                    };

                                    console.log("Race Data:", this2.race_info);
                                    console.log(timeseries);

                                    // Parse Votes for Master Table
                                    var total_trump_increase = 0;
                                    function calc_votes(votes,index){
                                        var per_adj = votes.vote_shares.bidenj+votes.vote_shares.trumpd;
                                        var biden = votes.vote_shares.bidenj*votes.votes;
                                        
                                        var vote_row = {      
                                        "index": index,
                                        "votes": votes.votes,
                                        "timestamp": votes.timestamp,
                                        "bidenj": votes.vote_shares.bidenj,
                                        "biden_votes":0,
                                        "trumpd": votes.vote_shares.trumpd,
                                        "trump_votes":0,
                                        "other_votes":0,
                                        "total_vote_add":0,
                                        "total_vote_add_trump":0,
                                        "total_vote_add_biden":0,
                                        "total_vote_add_other":0,
                                        "total_vote_add_total":0,
                                        "percent_of_remaining_trump":0,
                                        "percent_of_remaining_biden":0,
                                        //"total_vote_add_bdiff":0,
                                       // "total_vote_add_tdiff":0,
                                        "time":votes.timestap
                                        };
                                                            
                                        return vote_row;
                                    }


                                    var pres_votes = timeseries.map(calc_votes);
                               
                                    pres_votes = pres_votes.map(function(votes,index){
                                        if(index == 0){
                                            votes.biden_votes = votes.bidenj*votes.votes;
                                            votes.trump_votes = votes.trumpd*votes.votes;
                                            votes.total_vote_add = votes.votes;
                                            votes.total_vote_add_trump = votes.votes * votes.trumpd;
                                            votes.total_vote_add_biden = votes.votes * votes.bidenj;
                                            votes.total_vote_add_other = votes.votes - (votes.votes * votes.trumpd + votes.votes * votes.bidenj);
                                            //votes.total_vote_add_bdiff = votes.votes * votes.bidenj - votes.votes * votes.trumpd;
                                            //votes.total_vote_add_tdiff = votes.votes * votes.trumpd - votes.votes * votes.bidenj;
                                            votes.other_votes = (1-votes.bidenj-votes.trumpd)*votes.votes;
                                        }
                                        else if(index > 0){
                                        
                                            
                                            if(votes.votes == 0)
                                                votes.total_vote_add = 0;
                                            else 
                                                votes.total_vote_add = pres_votes[index].votes - pres_votes[index-1].votes;


                                            if(votes.bidenj == 0)
                                                votes.biden_votes = 0;
                                                //votes.biden_votes = pres_votes[index-1].biden_votes + votes.total_vote_add*votes.bidenj;
                                                votes.biden_votes = votes.bidenj*votes.votes;
                                            
                                            if(votes.trumpd == 0)
                                                votes.trump_votes = 0;
                                            else  
                                            //votes.trump_votes = pres_votes[index-1].trump_votes + votes.total_vote_add*votes.trumpd;
                                            votes.trump_votes = votes.trumpd*votes.votes;

                                            votes.other_votes = votes.votes - votes.biden_votes - votes.trump_votes;

                                            //votes.total_vote_add_trump = (pres_votes[index].votes - pres_votes[index-1].votes) * votes.trumpd;
                                            votes.total_vote_add_trump = votes.votes*votes.trumpd - pres_votes[index-1].votes*pres_votes[index-1].trumpd;
                                            //votes.total_vote_add_biden = (pres_votes[index].votes - pres_votes[index-1].votes) * votes.bidenj;
                                            votes.total_vote_add_biden = votes.votes*votes.bidenj - pres_votes[index-1].votes*pres_votes[index-1].bidenj;
                                            votes.total_vote_add_other = (1-votes.bidenj-votes.trumpd)*votes.votes - pres_votes[index-1].votes*(1 - pres_votes[index-1].bidenj - pres_votes[index-1].trumpd);
                                            votes.total_vote_add_total = pres_votes[index].votes - pres_votes[index-1].votes;
                                           // votes.total_vote_add_bdiff = (votes.votes*votes.bidenj - pres_votes[index-1].votes*pres_votes[index-1].bidenj) - (votes.votes*votes.trumpd - pres_votes[index-1].votes*pres_votes[index-1].trumpd);
                                           // votes.total_vote_add_tdiff = (votes.votes*votes.trumpd - pres_votes[index-1].votes*pres_votes[index-1].trumpd) - (votes.votes*votes.bidenj - pres_votes[index-1].votes*pres_votes[index-1].bidenj);
                                        }
                                        return votes;
                                    });
                                    console.log("Total Votes:",pres_votes);
                                 
                                    var totalnum_votes = pres_votes[pres_votes.length-1].votes;
                                    console.log("Total Num of Votes: ",totalnum_votes);
                                    if(selected_sort && selected_sort.includes('Time')) {
                                        console.log("Sort Selected: ",selected_sort);
                                        var temp_rows = pres_votes.map(function(vote,index){                            
                                            //return {"votes":vote.votes,"timestamp":vote.timestamp,"bidenj":vote.bidenj,"trumpd":vote.trumpd};
                                            vote.percent_of_remaining_trump = vote.total_vote_add_trump*100/(totalnum_votes-vote.votes);
                                            vote.percent_of_remaining_biden = vote.total_vote_add_biden*100/(totalnum_votes-vote.votes);
                                            return vote;
                                        }).sort(function(a, b){return a.timestamp - b.timestamp});
                                    }
                                    if(selected_sort && selected_sort.includes('Vote')) {
                                        console.log("Sort Selected: ",selected_sort);
                                        var temp_rows = pres_votes.map(function(vote,index){                            
                                            //return {"votes":vote.votes,"timestamp":vote.timestamp,"bidenj":vote.bidenj,"trumpd":vote.trumpd};
                                            vote.percent_of_remaining_trump = vote.total_vote_add_trump*100/(totalnum_votes-vote.votes);
                                            vote.percent_of_remaining_biden = vote.total_vote_add_biden*100/(totalnum_votes-vote.votes);
                                            return vote;
                                        }).sort(function(a, b){return a.votes - b.votes}); 
                                    }
 
                                    console.log("Total Votes Again:",temp_rows);
                                    
                                    this2.vote_rows = temp_rows.map(function(vote,index){
                                        return {"index":index,"bidenj":vote.bidenj,"biden_votes":vote.biden_votes,"trumpd":vote.trumpd,"trump_votes":vote.trump_votes,"other_votes":vote.other_votes,"timestamp":vote.timestamp,"votes":vote.votes,"vote_add":vote.total_vote_add,"trump_added":vote.total_vote_add_trump,
                                            "biden_added":vote.total_vote_add_biden, "remaining_percent_trump":vote.percent_of_remaining_trump,"remaining_percent_biden": vote.percent_of_remaining_biden};
                                    });
                                    console.log("Vote Rows:", this2.vote_rows);
                                    
                                    if(this2.table)
                                   this2.table.destroy();
                               
                                   $('table.display').css('display','block');
                               
                                var this3 = this2;
                                setTimeout(function(){ 
                                        $('#results_table').show();
                                        $('.loader').hide();
                                        this3.table = $("table.display").DataTable();

                                        $("table.display").on( 'page.dt', function () {
                                            var info = this3.table.page.info();
                                            $('#pageInfo').html( 'Showing page: '+info.page+' of '+info.pages );
                                            this3.selectedindex = info.page;
                                            this3.number_pages = info.pages;
                                            this3.linechart();
                                            this3.linechart2();
                                            this3.linechart3();
                                            this3.linechart4();
                                            this3.piechart();
                                            this3.stackedchart();
                                            this3.fill_votebins();
                                            this3.stackedchart2();
                                        } );
                                        var info = this3.table.page.info();
                                        this3.number_pages = info.pages; 
                                        //this.step = 200000/this.number_pages;
                                        //console.log("Step:",this.step);

                                        console.log("Pages:", this3.number_pages);

                                        this3.parse_vote();
                                        this3.linechart();
                                        this3.linechart2();
                                        this3.linechart3();
                                        this3.linechart4();
                                        this3.piechart();
                                        this3.fill_votebins();
                                        this3.stackedchart2();
                                        this3.stackedchart();                                   
                                   
                                    }, 500);
                                }});
                         
                            },
                            start_tables: function(state,sort){
                                
                                $('.loader').show();
                                this.get_data(state,sort);  

                              
                               
                                
                                $('#pieheader').css('display','block');
                               
                                
                            },
                            parse_vote: function(){
                                  // Derive Headers and Data for Line Chart
                                   
                                    var dateheaders = [];
                                    var datedatabiden = [];
                                    var datedatabidenadd = [];
                                    var datedatabidenadddiff = [];
                                    var datedatatrump = [];
                                    var datedatatrumpadd = [];
                                    var datedatatrumpadddiff = [];
                                    var datedatatotal = [];
                                    var datedatatotaladd = [];
                                    var datedataother = [];
                                    var datedataotheradd = [];
                                    var perremainingtrump = [];
                                    var perremainingbiden = [];

                                    this.dateheaders_store = [];
                                    this.datedatabiden_store = [];
                                    this.datedatabidenadd_store = [];
                                    this.datedatabidenadddiff_store = [];
                                    this.datedatatrump_store = [];
                                    this.datedatatrumpadd_store = [];
                                    this.datedatatrumpadddiff_store = [];
                                    this.datedatatotal_store = [];
                                    this.datedataother_store = [];
                                    this.datedataotheradd_store = [];
                                    this.datedatatotaladd_store = [];
                                    this.perremainingtrump_store = [];
                                    this.perremainingbiden_store = [];


                                    console.log("Parse Interval",this.parse_interval);
                                    for(i=0;i<this.vote_rows.length;i++){
                                        if(i == 0){
                                            dateheaders.push(this.vote_rows[i].timestamp);
                                            datedatabiden.push(this.vote_rows[i].biden_votes);
                                            datedatatrump.push(this.vote_rows[i].trump_votes);
                                            datedatabidenadd.push(this.vote_rows[i].biden_votes);
                                            datedatatrumpadd.push(this.vote_rows[i].trump_votes);
                                            datedatabidenadddiff.push(this.vote_rows[i].biden_votes);
                                            datedatatrumpadddiff.push(this.vote_rows[i].trump_votes);
                                            datedataotheradd.push(this.vote_rows[i].other_votes);
                                            datedatatotaladd.push(this.vote_rows[i].votes);
                                            datedatatrump.push(this.vote_rows[i].trump_votes);
                                            datedatatotal.push(this.vote_rows[i].votes);
                                            datedataother.push(this.vote_rows[i].other_votes);
                                            perremainingtrump.push(this.vote_rows[i].remaining_percent_trump);
                                            perremainingbiden.push(this.vote_rows[i].remaining_percent_biden);
                                            
                                            
                                        }
                                        else if( i % this.parse_interval != 0 ){
                                            dateheaders.push(this.vote_rows[i].timestamp);
                                            datedatabiden.push(this.vote_rows[i].biden_votes);
                                            datedatatrump.push(this.vote_rows[i].trump_votes);
                                            datedataother.push(this.vote_rows[i].other_votes);
                                            datedatabidenadd.push(this.vote_rows[i].biden_votes-this.vote_rows[i-1].biden_votes);
                                            datedatatrumpadd.push(this.vote_rows[i].trump_votes-this.vote_rows[i-1].trump_votes);
                                            datedataotheradd.push(this.vote_rows[i].other_votes-this.vote_rows[i-1].other_votes);
                                            datedatatotaladd.push(this.vote_rows[i].votes-this.vote_rows[i-1].votes);
                                            datedatabidenadddiff.push(this.vote_rows[i].biden_votes - this.vote_rows[i-1].biden_votes);
                                            datedatatrumpadddiff.push(this.vote_rows[i].trump_votes - this.vote_rows[i-1].trump_votes);
                                            datedatatotal.push(this.vote_rows[i].votes);
                                            perremainingtrump.push(this.vote_rows[i].remaining_percent_trump);
                                            perremainingbiden.push(this.vote_rows[i].remaining_percent_biden);
                                        }
                                        else if(i % this.parse_interval == 0) {
                                            dateheaders.push(this.vote_rows[i].timestamp);
                                            datedatabiden.push(this.vote_rows[i].biden_votes);
                                            datedatatrump.push(this.vote_rows[i].trump_votes);
                                            datedataother.push(this.vote_rows[i].other_votes);
                                            datedatatotal.push(this.vote_rows[i].votes);
                                            datedatabidenadd.push(this.vote_rows[i].biden_votes-this.vote_rows[i-1].biden_votes);
                                            datedatatrumpadd.push(this.vote_rows[i].trump_votes-this.vote_rows[i-1].trump_votes);
                                            datedataotheradd.push(this.vote_rows[i].other_votes-this.vote_rows[i-1].other_votes);
                                            datedatatotaladd.push(this.vote_rows[i].votes-this.vote_rows[i-1].votes);
                                            datedatabidenadddiff.push(this.vote_rows[i].biden_votes - this.vote_rows[i-1].biden_votes);
                                            datedatatrumpadddiff.push(this.vote_rows[i].trump_votes - this.vote_rows[i-1].trump_votes);
                                            perremainingtrump.push(this.vote_rows[i].remaining_percent_trump);
                                            perremainingbiden.push(this.vote_rows[i].remaining_percent_biden);


                                            this.dateheaders_store.push(dateheaders);
                                            dateheaders = []; 
                                            this.datedatabiden_store.push(datedatabiden);
                                            datedatabiden = [];
                                            this.datedatabidenadd_store.push(datedatabidenadd);
                                            datedatabidenadd = [];
                                            this.datedatatrump_store.push(datedatatrump);
                                            datedatatrump = [];  
                                            this.datedatatrumpadd_store.push(datedatatrumpadd);
                                            datedatatrumpadd = [];  
                                            this.datedatatotal_store.push(datedatatotal);
                                            datedatatotal = []; 
                                            this.datedataother_store.push(datedataother);
                                            datedataother = [];     
                                            this.datedataotheradd_store.push(datedataotheradd);
                                            datedataotheradd = [];       
                                            this.datedatatotaladd_store.push(datedatatotaladd);
                                            datedatatotaladd = [];  
                                            this.datedatabidenadddiff_store.push(datedatabidenadddiff);
                                            datedatabidenadddiff = [];       
                                            this.datedatatrumpadddiff_store.push(datedatatrumpadddiff);
                                            datedatatrumpadddiff = [];    
                                            this.perremainingtrump_store.push(perremainingtrump);
                                            perremainingtrump = [];
                                            this.perremainingbiden_store.push(perremainingbiden);
                                            perremainingbiden = [];                                          
                                        }
                                        else{
                                            dateheaders.push(this.vote_rows[i].timestamp);
                                            datedatabiden.push(this.vote_rows[i].biden_votes);
                                            datedatatrump.push(this.vote_rows[i].trump_votes);
                                            datedataother.push(this.vote_rows[i].other_votes);
                                            datedatatotal.push(this.vote_rows[i].votes);
                                            datedatabidenadd.push(this.vote_rows[i].biden_votes-this.vote_rows[i-1].biden_votes);
                                            datedatatrumpadd.push(this.vote_rows[i].trump_votes-this.vote_rows[i-1].trump_votes);
                                            datedataotheradd.push(this.vote_rows[i].other_votes-this.vote_rows[i-1].other_votes);
                                            datedatatotaladd.push(this.vote_rows[i].votes-this.vote_rows[i-1].votes);
                                            datedatabidenadddiff.push(this.vote_rows[i].biden_votes - this.vote_rows[i-1].biden_votes);
                                            datedatatrumpadddiff.push(this.vote_rows[i].trump_votes - this.vote_rows[i-1].trump_votes);
                                            perremainingtrump.push(this.vote_rows[i].remaining_percent_trump);
                                            perremainingbiden.push(this.vote_rows[i].remaining_percent_biden);
                                        }

                                    }
                                
                                    console.log("Date Total Add: ", this.datedatatotaladd_store);
                                    console.log("Date Biden Add Diff: ", this.datedatabidenadddiff_store);
                                    console.log("Date Trump Add Diff: ", this.datedatatrumpadddiff_store);

                                    // PieChart calculations
                                    var totalslices = [];
                                    var bidenslices = [];
                                    var trumpslices = [];
                                    var otherslices = [];
                                    var pieheaders = [];
                                    if(this.datedatabiden_store != null) {
                                        for(var i = 0;i < this.datedatabiden_store.length;i++){
                                                var total_amt = 0;
                                                var total_biden = 0;
                                                var total_trump = 0;
                                                var total_other = 0;
                                                for(var j = 0;j < this.datedatatotal_store[i].length;j++){
                                                    total_amt += this.datedatatotal_store[i][j];
                                                    total_biden += this.datedatabiden_store[i][j];
                                                    total_trump += this.datedatatrump_store[i][j];
                                                    total_other += this.datedataother_store[i][j];
                                                    if(j == 0 ){
                                                        pieheaders[i] = this.dateheaders_store[i][j] + " To ";
                                                    }
                                                    if(j == this.dateheaders_store[i].length-1){
                                                        pieheaders[i] +=  this.dateheaders_store[i][j];
                                                    }
                                                // console.log(pieheaders);
                                                }
                                                totalslices.push(total_amt);                             
                                                bidenslices.push(total_biden);                           
                                                trumpslices.push(total_trump);                               
                                                otherslices.push(total_other);
                                            }
                                    }

                                this.biden_slices = bidenslices;
                                this.trump_slices = trumpslices;
                                this.other_slices = otherslices;
                                this.total_slices = totalslices;
                                this.pie_headers = pieheaders;

                                console.log("Other Slices: ",otherslices);



                       
                            },
                            fill_votebins: function(){

                                // Set up Vote Bins
                                var index = 0;
                                var interval = 0;
                                this.vote_bins = [];
                                var vote_bin = {
                                    "interval":0,
                                    "biden_in_bin": 0,
                                    "trump_in_bin":0,
                                };
                              
                                   
                                var step = parseInt(200000/(this.number_pages*10));
                                //var step = 2500;
                                
                                console.log("Step",step);

                                while(interval <= 200000){
                                    vote_bin.interval = interval;
                                    vote_bin.trump_in_bin = 0;
                                    vote_bin.biden_in_bin = 0;
                                    this.vote_bins[index] = vote_bin;
                                    //console.log("Vote Bins: ",this.vote_bins[index]);
                                    index++;
                                    interval = interval + step;
                                    
                                    var vote_bin = {
                                        "interval":0,
                                        "biden_in_bin": 0,
                                        "trump_in_bin":0,
                                    };

                                }
                               


                                // Put in Biden Bins
                                for(var j = 0;j<this.datedatabidenadddiff_store.length;j++){
                                    var store = this.datedatabidenadddiff_store[j];
                                    for(var k=0;k < store.length;k++){
                                        for(var l = 0;l < this.vote_bins.length;l++){
                                            //console.log("Store value:",store[k]);
                                            if(l > 0)
                                                if(store[k] < this.vote_bins[l].interval && store[k] >= this.vote_bins[l-1].interval)
                                                    this.vote_bins[l].biden_in_bin++;
                                        }
                                    }
                                    //console.log("Store:",store);
                                }

                                // Put in Trump Bins
                                for(var j = 0;j<this.datedatatrumpadddiff_store.length;j++){
                                    var store = this.datedatatrumpadddiff_store[j];
                                    for(var k=0;k < store.length;k++){
                                        for(var l = 0;l < this.vote_bins.length;l++){
                                            //console.log("Store value:",store[k]);
                                            if(l > 0)
                                                if(store[k] < this.vote_bins[l].interval && store[k] >= this.vote_bins[l-1].interval)
                                                    this.vote_bins[l].trump_in_bin++;
                                        }
                                    }
                                    //console.log("Store:",store);
                                }
                                console.log("Vote Bins: ",this.vote_bins);

                                this.bin_headers = [];
                                this.bin_biden = [];
                                this.bin_trump = [];
                                // Just for update

                                var index = 0;
                                for(i=0;i<this.vote_bins.length;i++){
                                        if(i == 0){
                                            this.bin_headers[index] = [];
                                            this.bin_biden[index] = [];
                                            this.bin_trump[index] = [];
                                            this.bin_headers[index].push(this.vote_bins[i].interval);
                                            this.bin_biden[index].push(this.vote_bins[i].biden_in_bin);
                                            this.bin_trump[index].push(this.vote_bins[i].trump_in_bin);
                                            
                                        }
                                        else if( i % this.parse_interval != 0 ){
                                            this.bin_headers[index].push(this.vote_bins[i].interval);
                                            this.bin_biden[index].push(this.vote_bins[i].biden_in_bin);
                                            this.bin_trump[index].push(this.vote_bins[i].trump_in_bin);
                                        }
                                        else if(i % this.parse_interval == 0) {
                                            this.bin_headers[index].push(this.vote_bins[i].interval);
                                            this.bin_biden[index].push(this.vote_bins[i].biden_in_bin);
                                            this.bin_trump[index].push(this.vote_bins[i].trump_in_bin);
                                            
                                            index++;     
                                            this.bin_headers[index] = [];
                                            this.bin_biden[index] = [];
                                            this.bin_trump[index] = [];     
                                        }
                                        else{
                                            this.bin_headers[index].push(this.vote_bins[i].interval);
                                            this.bin_biden[index].push(this.vote_bins[i].biden_in_bin);
                                            this.bin_trump[index].push(this.vote_bins[i].trump_in_bin);
                                        }

                                    }
                                
                            },
                    
                      // Function used to Display Line Chart based on ChartFx Jquery Plugin
                        linechart:function(){
                            this.date_headers = this.dateheaders_store[this.selectedindex];
                            this.datedata_biden = this.datedatabiden_store[this.selectedindex];
                            this.datedata_trump = this.datedatatrump_store[this.selectedindex];
                            this.datedata_other = this.datedataother_store[this.selectedindex];
                            var canvas = document.getElementById("lineChart");
                            var ctx = canvas.getContext('2d');

                            

                            // Global Options:
                            Chart.defaults.global.defaultFontColor = 'black';
                            Chart.defaults.global.defaultFontSize = 16;

                            var data = {
                            labels: this.date_headers,
                            datasets: [{
                                label: "Trump Votes",
                                fill: true,
                                lineTension: 0.1,
                                backgroundColor: "rgba(167,105,0,0.4)",
                                borderColor: "rgb(167, 105, 0)",
                                borderCapStyle: 'butt',
                                borderDash: [],
                                borderDashOffset: 0.0,
                                borderJoinStyle: 'miter',
                                pointBorderColor: "white",
                                pointBackgroundColor: "black",
                                pointBorderWidth: 1,
                                pointHoverRadius: 8,
                                pointHoverBackgroundColor: "brown",
                                pointHoverBorderColor: "yellow",
                                pointHoverBorderWidth: 2,
                                pointRadius: 4,
                                pointHitRadius: 10,
                                // notice the gap in the data and the spanGaps: false
                                data: this.datedata_trump,
                                spanGaps: false,
                                },{
                                label: "Biden Votes",
                                fill: false,
                                lineTension: 0.1,
                                backgroundColor: "rgba(225,0,0,0.4)",
                                borderColor: "red", // The main line color
                                borderCapStyle: 'square',
                                borderDash: [], // try [5, 15] for instance
                                borderDashOffset: 0.0,
                                borderJoinStyle: 'miter',
                                pointBorderColor: "black",
                                pointBackgroundColor: "white",
                                pointBorderWidth: 1,
                                pointHoverRadius: 8,
                                pointHoverBackgroundColor: "yellow",
                                pointHoverBorderColor: "brown",
                                pointHoverBorderWidth: 2,
                                pointRadius: 4,
                                pointHitRadius: 10,
                                // notice the gap in the data and the spanGaps: true
                                data: this.datedata_biden,
                                spanGaps: true,
                                }, {
                                label: "Other Votes",
                                fill: true,
                                lineTension: 0.1,
                                backgroundColor: "rgba(86,105,0,0.4)",
                                borderColor: "rgb(86, 105, 0)",
                                borderCapStyle: 'butt',
                                borderDash: [],
                                borderDashOffset: 0.0,
                                borderJoinStyle: 'miter',
                                pointBorderColor: "white",
                                pointBackgroundColor: "black",
                                pointBorderWidth: 1,
                                pointHoverRadius: 8,
                                pointHoverBackgroundColor: "brown",
                                pointHoverBorderColor: "yellow",
                                pointHoverBorderWidth: 2,
                                pointRadius: 4,
                                pointHitRadius: 10,
                                // notice the gap in the data and the spanGaps: false
                                data: this.datedata_other,
                                spanGaps: false,
                                }

                            ]
                            };

                            // Notice the scaleLabel at the same level as Ticks
                            var options = {
                            scales: {
                                        yAxes: [{
                                            ticks: {
                                                beginAtZero:true
                                            },
                                            scaleLabel: {
                                                display: true,
                                                labelString: 'Vote Totals',
                                                fontSize: 20 
                                            }
                                        }]            
                                    }  
                            };

                            if(myLineChart){
                                myLineChart.destroy();
                            }
                            // Chart declaration:
                            myLineChart = new Chart(ctx, {
                                type: 'line',
                                data: data,
                                options: options
                                });
                            },

                            linechart2:function(){
                                this.date_headers = this.dateheaders_store[this.selectedindex];
                                this.datedata_biden_add = this.datedatabidenadd_store[this.selectedindex];
                                this.datedata_trump_add = this.datedatatrumpadd_store[this.selectedindex];
                                this.datedata_other_add = this.datedataotheradd_store[this.selectedindex];
                                this.datedata_total_add = this.datedatatotaladd_store[this.selectedindex];
                                var canvas = document.getElementById("newlineChart");
                                var ctx = canvas.getContext('2d');

                                

                                // Global Options:
                                Chart.defaults.global.defaultFontColor = 'black';
                                Chart.defaults.global.defaultFontSize = 16;

                                var data = {
                                labels: this.date_headers,
                                datasets: [{
                                    label: "Trump Spike",
                                    fill: true,
                                    lineTension: 0.1,
                                    backgroundColor: "rgba(167,105,0,0.4)",
                                    borderColor: "rgb(167, 105, 0)",
                                    borderCapStyle: 'butt',
                                    borderDash: [],
                                    borderDashOffset: 0.0,
                                    borderJoinStyle: 'miter',
                                    pointBorderColor: "white",
                                    pointBackgroundColor: "black",
                                    pointBorderWidth: 1,
                                    pointHoverRadius: 8,
                                    pointHoverBackgroundColor: "brown",
                                    pointHoverBorderColor: "yellow",
                                    pointHoverBorderWidth: 2,
                                    pointRadius: 4,
                                    pointHitRadius: 10,
                                    // notice the gap in the data and the spanGaps: false
                                    data: this.datedata_trump_add,
                                    spanGaps: false,
                                    },{
                                    label: "Biden Spike",
                                    fill: false,
                                    lineTension: 0.1,
                                    backgroundColor: "rgba(225,0,0,0.4)",
                                    borderColor: "red", // The main line color
                                    borderCapStyle: 'square',
                                    borderDash: [], // try [5, 15] for instance
                                    borderDashOffset: 0.0,
                                    borderJoinStyle: 'miter',
                                    pointBorderColor: "black",
                                    pointBackgroundColor: "white",
                                    pointBorderWidth: 1,
                                    pointHoverRadius: 8,
                                    pointHoverBackgroundColor: "yellow",
                                    pointHoverBorderColor: "brown",
                                    pointHoverBorderWidth: 2,
                                    pointRadius: 4,
                                    pointHitRadius: 10,
                                    // notice the gap in the data and the spanGaps: true
                                    data: this.datedata_biden_add,
                                    spanGaps: true,
                                    }, {
                                    label: "Other Spike",
                                    fill: true,
                                    lineTension: 0.1,
                                    backgroundColor: "rgba(86,105,0,0.4)",
                                    borderColor: "rgb(86, 105, 0)",
                                    borderCapStyle: 'butt',
                                    borderDash: [],
                                    borderDashOffset: 0.0,
                                    borderJoinStyle: 'miter',
                                    pointBorderColor: "white",
                                    pointBackgroundColor: "black",
                                    pointBorderWidth: 1,
                                    pointHoverRadius: 8,
                                    pointHoverBackgroundColor: "brown",
                                    pointHoverBorderColor: "yellow",
                                    pointHoverBorderWidth: 2,
                                    pointRadius: 4,
                                    pointHitRadius: 10,
                                    // notice the gap in the data and the spanGaps: false
                                    data: this.datedata_other_add,
                                    spanGaps: false,
                                    },{
                                    label: "Total Spike",
                                    fill: true,
                                    lineTension: 0.1,
                                    backgroundColor: "lightblue",
                                    borderColor: "blue",
                                    borderCapStyle: 'butt',
                                    borderDash: [],
                                    borderDashOffset: 0.0,
                                    borderJoinStyle: 'miter',
                                    pointBorderColor: "white",
                                    pointBackgroundColor: "black",
                                    pointBorderWidth: 1,
                                    pointHoverRadius: 8,
                                    pointHoverBackgroundColor: "brown",
                                    pointHoverBorderColor: "yellow",
                                    pointHoverBorderWidth: 2,
                                    pointRadius: 4,
                                    pointHitRadius: 10,
                                    // notice the gap in the data and the spanGaps: false
                                    data: this.datedata_total_add,
                                    spanGaps: false,
                                    }

                                ]
                                };

                                // Notice the scaleLabel at the same level as Ticks
                                var options = {
                                scales: {
                                            yAxes: [{
                                                ticks: {
                                                    beginAtZero:true
                                                },
                                                scaleLabel: {
                                                    display: true,
                                                    labelString: 'New Vote Totals',
                                                    fontSize: 20 
                                                }
                                            }]            
                                        }  
                                };

                                if(myLineChart2){
                                    myLineChart2.destroy();
                                }
                                // Chart declaration:
                                myLineChart2 = new Chart(ctx, {
                                    type: 'line',
                                    data: data,
                                    options: options
                                    });
                            },


                            linechart3:function(){
                                this.date_headers = this.dateheaders_store[this.selectedindex];
                                this.datedata_biden_diff_add = this.datedatabidenadddiff_store[this.selectedindex];
                                this.datedata_trump_diff_add = this.datedatatrumpadddiff_store[this.selectedindex];
                                var canvas = document.getElementById("diffLineChart");
                                var ctx = canvas.getContext('2d');

                                

                                // Global Options:
                                Chart.defaults.global.defaultFontColor = 'black';
                                Chart.defaults.global.defaultFontSize = 16;

                                var data = {
                                labels: this.date_headers,
                                datasets: [{
                                    label: "Trump Gain/Loss",
                                    fill: true,
                                    lineTension: 0.1,
                                    backgroundColor: "rgba(167,105,0,0.4)",
                                    borderColor: "rgb(167, 105, 0)",
                                    borderCapStyle: 'butt',
                                    borderDash: [],
                                    borderDashOffset: 0.0,
                                    borderJoinStyle: 'miter',
                                    pointBorderColor: "white",
                                    pointBackgroundColor: "black",
                                    pointBorderWidth: 1,
                                    pointHoverRadius: 8,
                                    pointHoverBackgroundColor: "brown",
                                    pointHoverBorderColor: "yellow",
                                    pointHoverBorderWidth: 2,
                                    pointRadius: 4,
                                    pointHitRadius: 10,
                                    // notice the gap in the data and the spanGaps: false
                                    data: this.datedata_trump_diff_add,
                                    spanGaps: false,
                                    },{
                                    label: "Biden Gain/Loss",
                                    fill: false,
                                    lineTension: 0.1,
                                    backgroundColor: "rgba(225,0,0,0.4)",
                                    borderColor: "red", // The main line color
                                    borderCapStyle: 'square',
                                    borderDash: [], // try [5, 15] for instance
                                    borderDashOffset: 0.0,
                                    borderJoinStyle: 'miter',
                                    pointBorderColor: "black",
                                    pointBackgroundColor: "white",
                                    pointBorderWidth: 1,
                                    pointHoverRadius: 8,
                                    pointHoverBackgroundColor: "yellow",
                                    pointHoverBorderColor: "brown",
                                    pointHoverBorderWidth: 2,
                                    pointRadius: 4,
                                    pointHitRadius: 10,
                                    // notice the gap in the data and the spanGaps: true
                                    data: this.datedata_biden_diff_add,
                                    spanGaps: true,
                                    }
                                ]
                                };

                                // Notice the scaleLabel at the same level as Ticks
                                var options = {
                                scales: {
                                            yAxes: [{
                                                ticks: {
                                                    beginAtZero:true
                                                },
                                                scaleLabel: {
                                                    display: true,
                                                    labelString: 'Votes Gain/Loss',
                                                    fontSize: 20 
                                                }
                                            }]            
                                        }  
                                };

                                if(myLineChart3){
                                    myLineChart3.destroy();
                                }
                                // Chart declaration:
                                myLineChart3 = new Chart(ctx, {
                                    type: 'line',
                                    data: data,
                                    options: options
                                    });
                            },

                            linechart4:function(){
                                this.date_headers = this.dateheaders_store[this.selectedindex];
                                var pertrump = this.perremainingtrump_store[this.selectedindex];
                                var perbiden = this.perremainingbiden_store[this.selectedindex];
                                var canvas = document.getElementById("perLineChart");
                                var ctx = canvas.getContext('2d');

                                

                                // Global Options:
                                Chart.defaults.global.defaultFontColor = 'black';
                                Chart.defaults.global.defaultFontSize = 16;

                                var data = {
                                labels: this.date_headers,
                                datasets: [{
                                    label: "Trump % of Remaining Vote",
                                    fill: true,
                                    lineTension: 0.1,
                                    backgroundColor: "rgba(167,105,0,0.4)",
                                    borderColor: "rgb(167, 105, 0)",
                                    borderCapStyle: 'butt',
                                    borderDash: [],
                                    borderDashOffset: 0.0,
                                    borderJoinStyle: 'miter',
                                    pointBorderColor: "white",
                                    pointBackgroundColor: "black",
                                    pointBorderWidth: 1,
                                    pointHoverRadius: 8,
                                    pointHoverBackgroundColor: "brown",
                                    pointHoverBorderColor: "yellow",
                                    pointHoverBorderWidth: 2,
                                    pointRadius: 4,
                                    pointHitRadius: 10,
                                    // notice the gap in the data and the spanGaps: false
                                    data: pertrump,
                                    spanGaps: false,
                                    },{
                                    label: "Biden % of Remaining Vote",
                                    fill: false,
                                    lineTension: 0.1,
                                    backgroundColor: "rgba(225,0,0,0.4)",
                                    borderColor: "red", // The main line color
                                    borderCapStyle: 'square',
                                    borderDash: [], // try [5, 15] for instance
                                    borderDashOffset: 0.0,
                                    borderJoinStyle: 'miter',
                                    pointBorderColor: "black",
                                    pointBackgroundColor: "white",
                                    pointBorderWidth: 1,
                                    pointHoverRadius: 8,
                                    pointHoverBackgroundColor: "yellow",
                                    pointHoverBorderColor: "brown",
                                    pointHoverBorderWidth: 2,
                                    pointRadius: 4,
                                    pointHitRadius: 10,
                                    // notice the gap in the data and the spanGaps: true
                                    data: perbiden,
                                    spanGaps: true,
                                    }
                                ]
                                };

                                // Notice the scaleLabel at the same level as Ticks
                                var options = {
                                scales: {
                                            yAxes: [{
                                                ticks: {
                                                    beginAtZero:true
                                                },
                                                scaleLabel: {
                                                    display: true,
                                                    labelString: 'Percent of Remaining Votes',
                                                    fontSize: 20 
                                                }
                                            }]            
                                        }  
                                };

                                if(myLineChart4){
                                    myLineChart4.destroy();
                                }
                                // Chart declaration:
                                myLineChart4 = new Chart(ctx, {
                                    type: 'line',
                                    data: data,
                                    options: options
                                    });
                            },









                        piechart: function(){
                            var oilCanvas = document.getElementById("pieChart");

                            Chart.defaults.global.defaultFontFamily = "Lato";
                            Chart.defaults.global.defaultFontSize = 18;

                            this.the_pieheader = this.pie_headers[this.selectedindex]; 
                            console.log(this.the_pieheader);

                            var oilData = {
                                labels: [
                                    "Trump Votes",
                                    "Biden Votes",
                                    "Other Votes"
                                ],
                                datasets: [
                                    {
                                        data: [this.trump_slices[this.selectedindex], this.biden_slices[this.selectedindex],this.other_slices[this.selectedindex]],
                                        backgroundColor: [
                                            "rgba(167,105,0,0.4)",
                                            "red",
                                            "rgba(86,105,0,0.4)"
                                        ],
                                        borderColor:[
                                            "rgb(167, 105, 0)",
                                            "red",
                                            "rgb(86, 105, 0)"

                                        ]
                                    }]
                            };

                            if(myPieChart){
                                myPieChart.destroy();
                            }

                            myPieChart = new Chart(oilCanvas, {
                            type: 'pie',
                            data: oilData
                            });
                        },
                        stackedchart: function(){
                            this.date_headers = this.dateheaders_store[this.selectedindex];
                            this.datedata_biden = this.datedatabiden_store[this.selectedindex];
                            this.datedata_trump = this.datedatatrump_store[this.selectedindex];
                            this.datedata_other = this.datedataother_store[this.selectedindex];

                            window.chartColors = {
                            red: 'rgb(255, 99, 132)',
                            orange: 'rgb(255, 159, 64)',
                            yellow: 'rgb(255, 205, 86)',
                            green: 'rgb(75, 192, 192)',
                            blue: 'rgb(54, 162, 235)',
                            purple: 'rgb(153, 102, 255)',
                            grey: 'rgb(231,233,237)'
                            };

                            var ctx = document.getElementById("stackedChart").getContext("2d");

                            
                            if(myStackedChart){
                                myStackedChart.destroy();
                            }
                            myStackedChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels:  this.date_headers,
                                datasets: [{
                                type: 'bar',
                                label: 'Trump Votes',
                                backgroundColor: "rgba(167,105,0,0.4)",
                                borderColor: "rgb(167, 105, 0)",
                                stack: 'Stack 0',
                                borderWidth: 2,
                                data: this.datedata_trump
                                }, {
                                type: 'bar',
                                label: 'Biden Votes',
                                backgroundColor: "red",
                                borderColor:"red",
                                stack: 'Stack 0',
                                data: this.datedata_biden,
                                borderWidth: 2
                                }, {
                                type: 'bar',
                                label: 'Other Votes',
                                backgroundColor: "rgba(86,105,0,0.4)",
                                borderColor:"rgb(86, 105, 0)",
                                stack: 'Stack 0',
                                data: this.datedata_other
                                }]
                            },
                            options: {
                                responsive: true,
                                title: {
                                display: true,
                                text: 'Vote Totals Per Time Interval'
                                },
                                tooltips: {
                                mode: 'index',
                                intersect: true
                                },
                                scales: {
                                xAxes: [{
                                    stacked: true,
                                }]
                                }
                            }
                            });
                        },
                        stackedchart2: function(){
                            //this.bin_headers = [];
                           

                            window.chartColors = {
                            red: 'rgb(255, 99, 132)',
                            orange: 'rgb(255, 159, 64)',
                            yellow: 'rgb(255, 205, 86)',
                            green: 'rgb(75, 192, 192)',
                            blue: 'rgb(54, 162, 235)',
                            purple: 'rgb(153, 102, 255)',
                            grey: 'rgb(231,233,237)'
                            };

                            var ctx = document.getElementById("binStackedChart").getContext("2d");

                            
                            if(myStackedChart2){
                                myStackedChart2.destroy();
                            }
                            myStackedChart2 = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: this.bin_headers[this.selectedindex],
                                    datasets: [{
                                    type: 'bar',
                                    label: 'Number for Trump',
                                    backgroundColor: "rgba(167,105,0,0.4)",
                                    borderColor: "rgb(167, 105, 0)",
                                    stack: 'Stack 0',
                                    borderWidth: 2,
                                    data: this.bin_trump[this.selectedindex]
                                    }, {
                                    type: 'bar',
                                    label: 'Number for Biden',
                                    backgroundColor: "red",
                                    borderColor:"red",
                                    stack: 'Stack 0',
                                    data: this.bin_biden[this.selectedindex],
                                    borderWidth: 2
                                    }]
                                },
                                options: {
                                    responsive: true,
                                    title: {
                                    display: true,
                                    text: 'Number of Gains within Gain Size Interval'
                                    },
                                    tooltips: {
                                    mode: 'index',
                                    intersect: true
                                    },
                                    scales: {
                                    xAxes: [{
                                        stacked: true,
                                    }]
                                    }
                                }
                            });
                        }

                          
                    },

                    computed: {
                       pres_vote_rows :  function(){                            
                            console.log("New Vote Rows:", this.vote_rows);                              
                            return this.vote_rows;
                       },
                       selected_index : function(){
                          console.log("New Selected Index:", this.selectedindex);
                          return this.selectedindex
                      }   
                    }
                     
                });  // Vue Object
                 
        }

        
    });
    </script>
    <style>
        body{
           /* background-color: #666;*/
        }

        #barChart{
            background-color: wheat;
            border-radius: 6px;
            /*   Check out the fancy shadow  on this one */
            box-shadow: 0 3rem 5rem -2rem rgba(0, 0, 0, 0.6);
        }
        .fxchart{
            background-color: beige;
            padding-top: 1em

        }
        div.jumbotron p{
                font-size:1.35em;
                text-align:center
             }

        div.jumbotron h2, div.jumbotron h1, h2#trumpvoteloss, h1.voteloss {
                text-align:center
             }
        
      

        #pieheader{
            text-align:center;
            display:none
        } 

        #results_table{
            display:none
        }
        

        .dataTables_wrapper{
            margin-left:-31.5%;
          
        }

      
        #charts [class*="col"] {
            border:2px dashed black;
            padding:0.5em;
        }

        [v-cloak] > * { display:none; }
        [v-cloak]::before { content: "loading..."; }

        .loader {
            position:relative;
            border: 16px solid #f3f3f3; /* Light grey */
            border-top: 16px solid #3498db; /* Blue */
            border-radius: 50%;
            width: 120px;
            height: 120px;
            left: 45%;
            top:15%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
    <body>  
        <div class="loader"></div>  
        <div id = "results_table"  v-cloak>
            <div id="tophdr" class="container">
                <div class="input-group mb-3" style="margin-top:2em">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Choose State</label>
                    </div>
                    <select v-model="state_selected" class="custom-select" id="inputGroupSelect01">
                        <option v-for="state in states">{{ state }}</option>
                    </select>
              
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Sort By</label>
                    </div>
                    <select v-model="sort_selected" class="custom-select" id="inputGroupSelect01">
                        <option v-for="sort in sorts">{{ sort }}</option>
                    </select>
                </div>    
                <div class="jumbotron" >
                    <h1>2020 Presidential Election Parser</h1> 
                    <h2>Race Data:</h2>  
                    <p>{{ race_info.race_id }}</p>
                    <p>{{ race_info.race_slug }}</p>
                    <p>{{ race_info.url }}</p>          
                </div>
            </div>	
            <div class="container" >
                <table id="example" class="display table table-striped table-bordered" v-if = "vote_rows.length > 0 && headers.length > 0"  style='width:100%'>
                    <thead> 
                        <tr>
                            <th class="th-sm" v-for="header in headers">{{header}}</th>
                        </tr>
                    </thead>
                    <tbody>      
                        <tr v-for = "row in pres_vote_rows">
                            <td v-for = "cell in row" >{{ cell }}</td>
                        </tr>  
                    </tbody>
                </table>                  
            </div>

            <!--<canvas id="myChart" width="400" height="400"></canvas>-->
           
            <div class="fxchart" class="container">
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">                       
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Choose Chart Resolution</label>
                            </div>
                            <select v-model="selected" class="custom-select" id="inputGroupSelect01">
                                <option>1 Times</option>
                                <option>5 Times</option>
                                <option>10 Times</option>
                                <option>15 Times</option>
                            </select>
                        </div>                     
                    </div>
                    <div class="col-sm-4"></div>
                </div>
            </div>
            <div id="charts"  style="margin-top:-4em;transform:scale(0.8,0.8)">
                <h4 style="color:red;background-color:lightgray;padding:0.25em;text-align:center">You Can Click Charts to Enlarge and Reduce</h4>
                <div class="row">
                    <div id="flinec" class="col-sm-4">
                        <canvas id="lineChart" class="achart"></canvas>
                    </div>
                    <div id="flinecnew" class="col-sm-4">
                        <canvas id="newlineChart" class="achart"></canvas>
                    </div>
                    <div id="fpiec" class="col-sm-4">
                        <h3 id="pieheader" v-cloak>{{ the_pieheader }}</h3>
                        <canvas id="pieChart" class="achart"></canvas>
                    </div>
                </div>

                <div class="row">                   
                    <div id="fstackedc" class="col-sm-4">
                        <h1 id="stackedheader" v-cloak>{{ the_stackedheader }}</h1>
                        <canvas id="stackedChart" class="achart"></canvas>
                    </div>
                    <div id="flinecdiff" class="col-sm-4">
                        <canvas id="diffLineChart" class="achart"></canvas>
                    </div>
                    <div id="fstackedcbin" class="col-sm-4">
                        <canvas id="binStackedChart" class="achart"></canvas>
                    </div> 
                </div>

                <div class="row">                   
                    <div id="flinecper" class="col-sm-4">
                        <canvas id="perLineChart" class="achart"></canvas>
                    </div>
                    <!--<div id="" class="col-sm-4">
                    </div>
                    <div id="" class="col-sm-4">
                    </div>--> 
                </div>
            </div>
           
        
       
    </body>