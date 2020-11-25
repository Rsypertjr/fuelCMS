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
                var myPieChart = null;
                var myStackedChart = null;
                var voterows = [];
                var racedata = {};
                var table = '';


                var getdata =  xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                       
                        
                        jobj = JSON.parse(this.responseText);  // Get Vote Data from text file in JSON form

                        timeseries = jobj.data.races[0].timeseries;
                        console.log(jobj);
                        race_data = {
                            "race_id": jobj.data.races[0].race_id,
                            "race_slug": jobj.data.races[0].race_slug,
                            "url": jobj.data.races[0].url 
                        };

                        console.log("Race Data:", race_data);
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
                            "time":votes.timestap
                             };
                                                
                            return vote_row;
                        }

                        
                        var pres_votes = timeseries.map(calc_votes);

                        // Calculate Additional Values in Votes Object
                        pres_votes = pres_votes.map(function(vote,index){                            
                         //return {"votes":vote.votes,"timestamp":vote.timestamp,"bidenj":vote.bidenj,"trumpd":vote.trumpd};
                         return vote;
                        // }).sort(function(a, b){return a.index- b.index});  // Sort by index
                        //}).sort(function(a, b){return a.votes- b.votes});   // Sort by votes
                        }).sort(function(a, b){return a.timestamp- b.timestamp});   // Sort by timestamp

                        pres_votes = pres_votes.map(function(votes,index){
                            if(index == 0){
                                votes.biden_votes = votes.bidenj*votes.votes;
                                votes.trump_votes = votes.trumpd*votes.votes;
                                votes.total_vote_add = votes.votes;
                                votes.total_vote_add_trump = votes.votes * votes.trumpd;
                                votes.total_vote_add_biden = votes.votes * votes.bidenj;
                                votes.total_vote_add_other = votes.votes - (votes.votes * votes.trumpd + votes.votes * votes.bidenj);
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
                            }
                            return votes;
                        });
                        console.log("Total Votes:",pres_votes);

                     // Final Format Display Rows of Votes
                       voterows = pres_votes.map(function(vote,index){                            
                         //return {"votes":vote.votes,"timestamp":vote.timestamp,"bidenj":vote.bidenj,"trumpd":vote.trumpd};
                         return vote;
                        }).sort(function(a, b){return a.votes - b.votes});
                       
                        voterows = pres_votes.map(function(vote,index){
                            return {"index":index,"bidenj":vote.bidenj,"biden_votes":vote.biden_votes,"trumpd":vote.trumpd,"trump_votes":vote.trump_votes,"other_votes":vote.other_votes,"timestamp":vote.timestamp,"votes":vote.votes,"vote_add":vote.total_vote_add,"trump_added":vote.total_vote_add_trump,
                                "biden_added":vote.total_vote_add_biden };
                        });
                        console.log("Vote Rows:", voterows);
                        vue_obj();
                           
                      
                     
                   

                   
            }
            
        };
        xmlhttp.open("GET", "getdata/Michigan", true);
        xmlhttp.send();

        function vue_obj(){
                                
                        // Vue Object
                        vm = new Vue({
                        el: '#results_table',
                        data: {
                            test: "This is a Test",
                            headers : ["Index","Biden %","Biden Votes","Trump %","Trump Votes","Other Votes","Time Stamps","Votes", "Votes Added","Trump Added","Biden Added"],
                            tlheaders: ["Biden Votes","Biden Vote Increase","1st Index","2nd Index", "Other Votes","Time1","Time2","1st Trump Votes","2nd Trump Votes",
                                        "Trump Vote Loss","Accumulated Trump Vote Loss","Votes Increase + Trump Loss","Last Vote Total", "Overall Vote Increase"],

                            blheaders: ["Trump Votes","Trump Vote Increase","1st Index","2nd Index", "Other Votes","1st Biden Votes","2nd Biden Votes",
                                        "Biden Vote Loss","Accumulated Biden Vote Loss","Votes Increase + Biden Loss","Last Vote Total", "Overall Vote Increase"],     
                            states: ["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho",
                                        "Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota",
                                        "Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Carolina",
                                        "North Dakota","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee",
                                        "Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"],      
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
                            datedata_other: [],
                            datedata_other_add: [],
                            biden_slices: [],
                            trump_slices: [],
                            other_slices: [],
                            total_slices: [],
                            dateheaders_store: [],
                            datedatabiden_store: [],
                            datedatabidenadd_store: [],
                            datedatatrump_store: [],
                            datedatatrumpadd_store: [],
                            datedataother_store: [],
                            datedataotheradd_store: [],
                            datedatatotal_store: [],
                            parse_interval: 10,
                            pie_headers: [],
                            the_pieheader:null,
                            the_stackedheader:null,
                            res_selected:0,
                            state_selected:'Michigan',
                            selected:'1 Times',
                            ttable:''
                        },

                        watch:{
                            selected: function(val){
                                this.parse_interval = parseInt(val.replace('Times','').trim())*10;
                                this.parse_vote();
                                this.linechart();
                                this.linechart2();
                                this.piechart();
                                this.stackedchart();
                               
                            },
                           
                            state_selected : function(val){
                                $("#results_table").css("display","none");
                                this.start_tables(val);   
                            },
                            vote_rows: function(val){
                                this.parse_vote();
                                this.linechart();
                                this.linechart2();
                                this.piechart();
                                this.stackedchart();
                            }

                        },
                                                 
                        mounted: function() {                           
                            this.start_tables(this.state_selected);                                

                            var this2 = this;
                            $("table.display").on( 'page.dt', function () {
                                var info = table.page.info();
                                $('#pageInfo').html( 'Showing page: '+info.page+' of '+info.pages );
                                this2.selectedindex = info.page;
                                this2.linechart();
                                this2.linechart2();
                                this2.piechart();
                                this2.stackedchart();
                            } );

                            $('#lineChart').on('click',function(){
                            
                                if($(this).parent().parent().find('#flinec').hasClass('col-sm-12')){
                                    $(this).parent().parent().find('#flinec').removeClass('col-sm-12').addClass('col-sm-3');
                                    $(this).parent().parent().find('#fpiec').add('#fstackedc').add('#flinecnew').show();
                                } 
                                else{
                                    $(this).parent().parent().find('#fpiec').add('#fstackedc').add('#flinecnew').hide();
                                    $(this).parent().parent().find('#flinec').removeClass('col-sm-3').addClass('col-sm-12');
                                }
                            });

                            $('#newlineChart').on('click',function(){
                            
                            if($(this).parent().parent().find('#flinecnew').hasClass('col-sm-12')){
                                $(this).parent().parent().find('#flinecnew').removeClass('col-sm-12').addClass('col-sm-3');
                                $(this).parent().parent().find('#fpiec').add('#fstackedc').add('#flinec').show();
                            } 
                            else{
                                $(this).parent().parent().find('#fpiec').add('#fstackedc').add('#flinec').hide();
                                $(this).parent().parent().find('#flinecnew').removeClass('col-sm-3').addClass('col-sm-12');
                            }
                        }); 

                            $('#pieChart').on('click',function(){
                                //alert('ok');
                                if($('#fpiec').hasClass('col-sm-12')){
                                    $('#fpiec').removeClass('col-sm-12').addClass('col-sm-3');
                                    $('#flinec').add('#fstackedc').add('#flinecnew').show();
                                } 
                                else{
                                    $('#flinec').add('#fstackedc').add('#flinecnew').hide();
                                    $('#fpiec').removeClass('col-sm-3').addClass('col-sm-12');
                                }
                            });
                        
                            $('#stackedChart').on('click',function(){
                                //alert('ok');
                                if($('#fstackedc').hasClass('col-sm-12')){
                                    $('#fstackedc').removeClass('col-sm-12').addClass('col-sm-3');
                                    $('#flinec').add('#fpiec').add('#flinecnew').show();
                                } 
                                else{
                                    $('#flinec').add('#fpiec').add('#flinecnew').hide();
                                    $('#fstackedc').removeClass('col-sm-3').addClass('col-sm-12');
                                }
                            });
                                
                        },
                      
                        methods: {
                            // Mapping Function Used for calculating when vote total decreases and the accumulation
                            get_data: function(state){
                              var this2 = this;
                              var getdata =  xmlhttp.onreadystatechange = function() {
                                if (this.readyState == 4 && this.status == 200) {

                                     
                                    jobj = JSON.parse(this.responseText);  // Get Vote Data from text file in JSON form

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
                                        "time":votes.timestap
                                        };
                                                            
                                        return vote_row;
                                    }


                                    var pres_votes = timeseries.map(calc_votes);

                                    // Calculate Additional Values in Votes Object
                                    pres_votes = pres_votes.map(function(vote,index){                            
                                    //return {"votes":vote.votes,"timestamp":vote.timestamp,"bidenj":vote.bidenj,"trumpd":vote.trumpd};
                                    return vote;
                                    // }).sort(function(a, b){return a.index- b.index});  // Sort by index
                                    //}).sort(function(a, b){return a.votes- b.votes});   // Sort by votes
                                    }).sort(function(a, b){return a.timestamp- b.timestamp});   // Sort by timestamp

                                    pres_votes = pres_votes.map(function(votes,index){
                                        if(index == 0){
                                            votes.biden_votes = votes.bidenj*votes.votes;
                                            votes.trump_votes = votes.trumpd*votes.votes;
                                            votes.total_vote_add = votes.votes;
                                            votes.total_vote_add_trump = votes.votes * votes.trumpd;
                                            votes.total_vote_add_biden = votes.votes * votes.bidenj;
                                            votes.total_vote_add_other = votes.votes - (votes.votes * votes.trumpd + votes.votes * votes.bidenj);
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
                                        }
                                        return votes;
                                    });
                                    console.log("Total Votes:",pres_votes);

                                    // Final Format Display Rows of Votes
                                    var temp_rows = pres_votes.map(function(vote,index){                            
                                    //return {"votes":vote.votes,"timestamp":vote.timestamp,"bidenj":vote.bidenj,"trumpd":vote.trumpd};
                                    return vote;
                                    }).sort(function(a, b){return a.votes - b.votes});

                                    table = $("table.display").DataTable();

                                    this2.vote_rows = temp_rows.map(function(vote,index){
                                        return {"index":index,"bidenj":vote.bidenj,"biden_votes":vote.biden_votes,"trumpd":vote.trumpd,"trump_votes":vote.trump_votes,"other_votes":vote.other_votes,"timestamp":vote.timestamp,"votes":vote.votes,"vote_add":vote.total_vote_add,"trump_added":vote.total_vote_add_trump,
                                            "biden_added":vote.total_vote_add_biden };
                                    });
                                    console.log("Vote Rows:", this2.vote_rows);
                                    
                                    
                                    
                                }
                                
                            };
                            xmlhttp.open("GET", "getdata/"+state, true);
                            xmlhttp.send();   
                            
                            },
                            start_tables: function(state){
                                
                                if(table){
                                   table.destroy();
                               }
                                
                                this.get_data(state);  
                                $('table.display').css('display','block');
                                setTimeout(function(){ 
                                    $('#results_table').show();
                                    table.draw();
                                   
                                }, 1000);

                                
                                //this.parse_vote();
                                //this.linechart();
                                //this.linechart2();
                                //this.piechart();
                                //this.stackedchart();  
                               
                                
                                
                                
                                $('#pieheader').css('display','block');
                               
                                
                            },
                            parse_vote: function(){
                                  // Derive Headers and Data for Line Chart
                                   
                                    var dateheaders = [];
                                    var datedatabiden = [];
                                    var datedatabidenadd = [];
                                    var datedatatrump = [];
                                    var datedatatrumpadd = [];
                                    var datedatatotal = [];
                                    var datedataother = [];
                                    var datedataotheradd = [];
                                    this.dateheaders_store = [];
                                    this.datedatabiden_store = [];
                                    this.datedatabidenadd_store = [];
                                    this.datedatatrump_store = [];
                                    this.datedatatrumpadd_store = [];
                                    this.datedatatotal_store = [];
                                    this.datedataother_store = [];
                                    this.datedataotheradd_store = [];

                                    console.log("Parse Interval",this.parse_interval);
                                    for(i=0;i<voterows.length;i++){
                                        if(i == 0){
                                            dateheaders.push(voterows[i].timestamp);
                                            datedatabiden.push(voterows[i].biden_votes);
                                            datedatatrump.push(voterows[i].trump_votes);
                                            datedatabidenadd.push(voterows[i].biden_votes);
                                            datedatatrumpadd.push(voterows[i].trump_votes);
                                            datedataotheradd.push(voterows[i].other_votes);
                                            datedatatrump.push(voterows[i].trump_votes);
                                            datedatatotal.push(voterows[i].votes);
                                            datedataother.push(voterows[i].other_votes);
                                        }
                                        else if( i % this.parse_interval != 0 ){
                                            dateheaders.push(voterows[i].timestamp);
                                            datedatabiden.push(voterows[i].biden_votes);
                                            datedatatrump.push(voterows[i].trump_votes);
                                            datedataother.push(voterows[i].other_votes);
                                            datedatabidenadd.push(voterows[i].biden_votes-voterows[i-1].biden_votes);
                                            datedatatrumpadd.push(voterows[i].trump_votes-voterows[i-1].trump_votes);
                                            datedataotheradd.push(voterows[i].other_votes-voterows[i-1].other_votes);
                                            datedatatotal.push(voterows[i].votes);
                                        }
                                        else if(i % this.parse_interval == 0) {
                                            dateheaders.push(voterows[i].timestamp);
                                            datedatabiden.push(voterows[i].biden_votes);
                                            datedatatrump.push(voterows[i].trump_votes);
                                            datedataother.push(voterows[i].other_votes);
                                            datedatatotal.push(voterows[i].votes);
                                            datedatabidenadd.push(voterows[i].biden_votes-voterows[i-1].biden_votes);
                                            datedatatrumpadd.push(voterows[i].trump_votes-voterows[i-1].trump_votes);
                                            datedataotheradd.push(voterows[i].other_votes-voterows[i-1].other_votes);
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
                                        }
                                        else{
                                            dateheaders.push(voterows[i].timestamp);
                                            datedatabiden.push(voterows[i].biden_votes);
                                            datedatatrump.push(voterows[i].trump_votes);
                                            datedataother.push(voterows[i].other_votes);
                                            datedatatotal.push(voterows[i].votes);
                                            datedatabidenadd.push(voterows[i].biden_votes-voterows[i-1].biden_votes);
                                            datedatatrumpadd.push(voterows[i].trump_votes-voterows[i-1].trump_votes);
                                            datedataotheradd.push(voterows[i].other_votes-voterows[i-1].other_votes);
                                        }

                                    }
                                

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
                            trump_decrease: function(votes,index2){
                                if(index2 > 0 ){
                                   
                                    var biden_increase =  this.vote_rows[index2].biden_votes - this.vote_rows[index2-1].biden_votes;
                                    var biden_total = this.vote_rows[index2].biden_votes; 
                                    var vote_increase = this.vote_rows[index2].votes - this.vote_rows[index2-1].votes;  
                                    var vote1 = this.vote_rows[index2-1].trump_votes;   
                                    var vote2 = this.vote_rows[index2].trump_votes;       
                                    var time1 = this.vote_rows[index2-1].timestamp.toString();  
                                    var time2 = this.vote_rows[index2].timestamp.toString();                        
                                    var totals_err = votes.votes - (votes.biden_votes + votes.trump_votes);
                                    var vote_total = votes.votes;  
                                    var trumpvoteloss = vote1-vote2;  
                                    var vinc_plus_tloss = vote_increase + (vote1-vote2);                                   
                                }
                                else if(index2 == 0)  {
                                    var vote1 = null;
                                    var time1 = null;
                                    var biden_increase = null;
                                    var biden_total = 0;
                                    var vote_increase = null;
                                    var totals_err = null;
                                    var vote_total = null;
                                    var trumpvoteloss = 0;
                                    var trumpvotelosstotal = 0;
                                    var vinc_plus_tloss = null;
                                }
                                else;

                              
                                trump_vote_set = {

                                    "biden_votes": biden_total,
                                    "biden_increase": biden_increase,
                                    "index1":index2-1,
                                    "index2":index2,
                                    "other_votes": totals_err,
                                    "time1":time1,
                                    "time2":time2,
                                    "trumpd1":vote1,
                                    "trumpd2": vote2,
                                    "trumpvoteloss":trumpvoteloss,
                                    "trumpvotelosstotal":0,
                                    "vote_increase_plus_trumploss": vinc_plus_tloss,
                                    "vote_total": vote_total,
                                    "voteincrease": vote_increase

                                    };
                                //console.log("Trump Vote Set:", trump_vote_set);

                                if(vote2 < vote1)   
                                    return trump_vote_set;
                                else 
                                    return {};
                            },
                            get_trump_decrease: function(){
                                var tvd = this.vote_rows.map(this.trump_decrease);
                               tvd = tvd.filter(function(votes){return votes.index1 != null})

                               
                                for (i=0;i<tvd.length;i++){
                                    if(i == 0){
                                        tvd[i].trumpvotelosstotal = tvd[i].trumpvoteloss;
                                    }
                                    else if(i>0){
                                        tvd[i].trumpvotelosstotal  =  tvd[i-1].trumpvotelosstotal
                                            + tvd[i].trumpvoteloss;

                                        this.trump_voteloss = tvd[i].trumpvotelosstotal;
                                    }
                                    
                                  
                                   }

                                tvd = tvd.map(function(vote){                            
                                    //return {"votes":vote.votes,"timestamp":vote.timestamp,"bidenj":vote.bidenj,"trumpd":vote.trumpd};
                                    return vote;
                                    }).sort(function(a, b){return a.index1 - b.index1});
                                    
                             
                                this.trump_votes_decrease = tvd;
                                console.log("Vote Rows2:", this.trump_votes_decrease);
                        },

                        biden_decrease: function(votes, index){
                             // Mapping Function Used for calculating when Biden Vote Total Decreases and the Accumulation
                             if(index > 0 ) {
                             
                                var vote1 = this.vote_rows[index-1].biden_votes;
                                var vote2 = this.vote_rows[index].biden_votes;;
                                var trump_increase =  this.vote_rows[index].trump_votes - this.vote_rows[index-1].tpieheader
                                var vote_total = this.vote_rows[index].votes;  
                                var bidenvoteloss = vote1-vote2;  
                                var vinc_plus_bloss = vote_increase + (vote1-vote2);
                             }
                             else  {
                                var vote1 = null;
                                var trump_increase = null;
                                var trump_total = 0;
                                var vote_increase = null;
                                var totals_err = null;
                                var vote_total = null;
                                var bidenvoteloss = 0;
                                var bidenvotelosstotal = 0;
                                var vinc_plus_bloss = null;
                                }

                             var biden_vote_set = {
                                    "trump votes": trump_total,
                                    "trumpincrease":trump_increase,
                                    "index1":index-1,
                                    "index2":index,
                                    "other_votes": totals_err,
                                    "biden1":vote1,
                                    "biden2": vote2,
                                    "bidenvoteloss":bidenvoteloss,
                                    "bidenvotelosstotal":0,
                                    "vote_increase_plus_bidenloss": vinc_plus_bloss,  
                                    "vote_total": vote_total,
                                    "voteincrease": vote_increase         
                                }
                             //console.log(vote_set);

                             if(vote2 < vote1)
                                return biden_vote_set;
                             else 
                                return {};15
                            },
                        get_biden_decrease: function(){
                        
                            var tvd = this.vote_rows.map(this.biden_decrease);
                                tvd = tvd.filter(function(votes){return votes.indexpieheader1 != null})

                               
                                for (i=0;i<tvd.length;i++){
                                    if(i == 0){
                                        tvd[i].bidenvotelosstotal = tvd[i].bidenvoteloss;
                                    }
                                    else if(i>0){
                                        tvd[i].bidenvotelosstotal  =  tvd[i-1].bidenvotelosstotal
                                            + tvd[i].bidenvoteloss;

                                        this.biden_voteloss = tvd[i].bidenvotelosstotal; 
                                    }   
                                }

                                tvd = tvd.map(function(vote,index){                            
                                    //return {"votes":vote.votes,"timestamp":vote.timestamp,"bidenj":vote.bidenj,"trumpd":vote.trumpd};
                                    return vote;
                                    }).sort(function(a, b){return a.index1 - b.index1});
                             
                                this.biden_votes_decrease = tvd;
                                console.log("Vote Rows2:", this.biden_votes_decrease);
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
                                var canvas = document.getElementById("newlineChart");
                                var ctx = canvas.getContext('2d');

                                

                                // Global Options:
                                Chart.defaults.global.defaultFontColor = 'black';
                                Chart.defaults.global.defaultFontSize = 16;

                                var data = {
                                labels: this.date_headers,
                                datasets: [{
                                    label: "New Trump Votes",
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
                                    label: "New Biden Votes",
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
                                    label: "New Other Votes",
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
                                text: 'Stacked Bars'
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
        div.jumbotron p{
                font-size:1.35em;
                text-align:center
             }

        div.jumbotron h2, div.jumbotron h1, h2#trumpvoteloss, h1.voteloss {
                text-align:center
             }
        
        container.fxchart{"margin-bottom":2em}

        #pieheader{
            text-align:center;
            display:none
        } 

        #results_table{
            display:none
        }
    

        [v-cloak] > * { display:none; }
        [v-cloak]::before { content: "loading..."; }
    </style>
</head>
    <body>  
          
        <div id = "results_table"  v-cloak>
            <div id="tophdr" class="container">
                <div class="input-group mb-3" style="margin-top:2em">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Choose State</label>
                    </div>
                    <select v-model="state_selected" class="custom-select" id="inputGroupSelect01">
                        <option v-for="state in states">{{ state }}</option>
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
            <div class="container" style="margin:0 0 0 25em;">      
                <table id="" class="display" v-if = "vote_rows.length > 0 && headers.length > 0"  style='width:100%'>
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
            <br>
                    

            <!--<canvas id="myChart" width="400" height="400">}}</th>
                        </tr>
                    </thead>
                    <tbody> 
                        <tr v-for = "row in trump_votes_decrease">
                            <td v-for = "cell in row">{{cell}}</td>
                        </tr>  
                    </tbody>
                </table>
                <br>table.display
                        <tr>
                            <th class="th-sm" v-for="header in blheaders">{{header}}</th>
                        </tr>
                    </thead>
                    <tbody> 
                        <tr v-for = "row in biden_votes_decrease">
                            <td v-for = "cell in row">{{cell}}</td>
                        </tr>  
                    </tbody>
                </table>
                <div id="tophdr" class="container">
                    <div class="jumbotron" >
                        <h1>Summary</h1> 
                        <h2>Total Trump Vote Loss: {{ trump_voteloss }}</h2>  
                        <h2>Total Biden Vote Loss: {{ biden_voteloss }}</h2> 
                        <h2 v-if="trump_voteloss > biden_voteloss">Trump Lost More Votes By: {{ trump_voteloss - biden_voteloss }}</h2>
                        <h2 v-if="biden_voteloss > trump_voteloss">Biden Lost More Votes By: {{ biden_voteloss - trump_voteloss }}</h2>
                    </div>
                </div>-->	
            
        
            <!--<canvas id="myChart" width="400" height="400"></canvas>-->
           
            <div class="fxchart" class="container" style="background-color:beige;padding-top:2em">
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
                        <h3 style="color:red;background-color:lightgray;padding:0.25em;text-align:center">You Can Click Charts to Enlarge and Reduce</h3>
                   
                    </div>
                    <div class="col-sm-4"></div>
                </div>
             
                <br />
                <br />
                <div class="row" id="multiple">
                    <div id="flinec" class="col-sm-3">
                        <canvas id="lineChart" class="achart"></canvas>
                    </div>
                    <div id="flinecnew" class="col-sm-3">
                        <canvas id="newlineChart" class="achart"></canvas>
                    </div>
                    <div id="fpiec" class="col-sm-3">
                        <h3 id="pieheader" v-cloak>{{ the_pieheader }}</h3>
                        <canvas id="pieChart" class="achart"></canvas>
                    </div>
                    <div id="fstackedc" class="col-sm-3">
                        <h1 id="stackedheader" v-cloak>{{ the_stackedheader }}</h1>
                        <canvas id="stackedChart" class="achart"></canvas>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-sm-12" id="single"></div>
            </div>
        
        <!--<script>
            //var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    datasets: [{
                        label: '# of Votes',
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>-->
    </body>