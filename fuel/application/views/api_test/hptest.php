<head>
      	
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
		<title>Sample Site</title>
		<link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
	
		<!-- Bootstrap -->
		<link href="./css/bootstrap.min.css" rel="stylesheet">
		<link href="./css/bootstrap-select.min.css" rel="stylesheet">
		
		<!-- Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="fonts/mom-webfont.css" type="text/css" charset="utf-8" />
		<link rel="stylesheet" href="fonts/myunderwood-webfont.css" type="text/css" charset="utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

		
		<!-- Layout -->
		<link href="./css/style.css')?>" rel="stylesheet">


        <meta content = "text/html; charset = ISO-8859-1" http-equiv = "content-type">

        <!--<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> -->
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css" ></link>

        
        
        <script src="https://cdn.jsdelivr.net/npm/vue"></script>


    <script type="text/javascript">

        $(document).ready(function()
            {
                str = "yes";
                var jobj = {};
                var total_count = "";
                var start = "";
                var count = "";
                var results = {};
                var result_ids = [];
                var facets = {};
                var rows = {};
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                       
                        
                        jobj = JSON.parse(this.responseText);
                        console.log(jobj);
                        total_count = jobj.total_count;
                        console.log("Total Count: ",total_count);

                        start = jobj.start;
                        console.log("Start",start);

                        count = jobj.count;
                        console.log("Count",count);

                        results = jobj.results;
                        console.log("Results",results);

                        facets = jobj.facets;
                        console.log("Facets",facets);

                        var new_rows = [];
                        
                        rows = results.map(function(row,index){
                            new_rows[index] = {};
                            result_ids[index] = row.id;
                            row.attribute_values.forEach( function(item){
                                if(item.attribute_id == 34337) {
                                    new_rows[index].title = item.value.text.replace('&#039;','\'');
                                }
                                if(item.attribute_id == 34338){
                                    new_rows[index].year = item.value.date.match(/^\d\d\d\d/)[0];
                                }
                                if(item.attribute_id == 34340){
                                    if(item.value.text != '')
                                        new_rows[index].description = item.value.text.replace('&#039;','\'');
                                    else
                                        new_rows[index].description = "Sorry, No Description!";
                                }
                            });
                            row.digital_assets.forEach( function(item){
                                if(item.large_thumbnail != "")
                                    new_rows[index].image = item.large_thumbnail;
                            });

                            
                        });
                        console.log("New Rows: ",new_rows);


                        vm = new Vue({
                            el: '#search-results',
                            data: {                                
                                count: count,
                                pagesize: 5,
                                current_page: 1,
                                rows: new_rows,
                                total_pages: 0,
                                ids: result_ids,
                                collection_name: "",
                                container_names: [],
                                headers: ["picture","title","year","description"],
                                pages : []
                            },
                            mounted: function() {
                            
                            },
                          
                            methods: {
                                collection: function (id) {
                                    var name = "";
                                    
                                    console.log("here at id: ",id);
                                    var result = results.filter(function(item2){
                                        return item2.id == id;  
                                    });
                                    var ancestors = result[0].ancestors;
                                    console.log("Ancestors: ",ancestors);
                                    var containers = [];
                                    ancestors.forEach(function(item3){
                                        if(item3.type == "collection"){
                                            vm.collection_nm = " " + item3.name;
                                        }
                                        if(item3.type == "container"){
                                            containers.push(item3.name);
                                            vm.container_nms = containers;
                                        }
                                    });
                                },
                                setpagesize: function(event){
                                    var pagesz = event.target.getAttribute('data-pagesize');
                                    vm.page_sz = parseInt(pagesz);
                                    console.log("Page Size: ",vm.page_sz);
                                    this.pager(vm.page_sz);
                                },
                                setpage: function(event){                                  

                                    if((page_data = event.target.getAttribute('data-page')) != null){
                                            var page_int = parseInt(page_data);
                                            this.pager(vm.page_sz,page_int-1);
                                        }
                                },
                                createview: function(event){
                                    var html = '<html><head></head><body>' +  event.target.innerHTML
                                        + '</body></html>';
                                    const win = window.open('about:blank', '_blank');
                                    win.document.write(html);
                                    win.focus();
                                },
                                pager: function (pageLength,pageindex=0){
                                    pagenum = 0;
                                    var pages = []
                                    console.log("Check New Rows",new_rows);
                                    vm.curr_pg = pageindex+1;

                                    
                                    new_rows.map(function(row,index){
                                        if(index % parseInt(pageLength) > 0){
                                            
                                            console.log("Row",row);
                                            pages[pagenum].push(row);
                                        }
                                        else if (index % parseInt(pageLength) == 0) { 
                                            if(index == 0){
                                                pages[pagenum] = []; 
                                                console.log("Row",row);
                                                pages[pagenum].push(row);
                                            }
                                            else{                                             
                                                pagenum++;      
                                                pages[pagenum] = [];      
                                            }                  
                                        }  
                                    });
                                    pages = pages.filter(function(page){
                                        return page.length != 0;
                                    })
                                    console.log("Pages",pages);
                                    vm.total_pgs = pages.length;
                                    vm.row_s = pages[pageindex];
                                    
                                    if(pages.length > 0)
                                        {   
                                            $('.pagination a').hide();
                                            if(pages.length > 1){
                                                $('.pagination a').filter(function(){
                                                    return $(this).children('i').length > 0;
                                                }).addClass("page-selected").show();
                                            }
                                            for(var i=0;i<pages.length;i++){
                                                $('.pagination a').filter(function(){
                                                    return $(this).text() == (i+1).toString();
                                                }).addClass("page-selected").show();
                                            }

                                            $('.pagination a').filter(function(){
                                                    return $(this).children('i.glyphicon-triangle-left').length > 0;
                                                }).click(function(){
                                                    vm.curr_pg = vm.curr_pg - 1;
                                                    if(vm.curr_pg <= 1)                                                       
                                                        vm.pager(vm.page_sz,0); 
                                                    else if(vm.curr_pg >= 1 && vm.curr_pg <= vm.total_pgs) 
                                                        vm.pager(vm.page_sz,vm.curr_pg-1);

                                                });

                                            $('.pagination a').filter(function(){
                                                    return $(this).children('i.glyphicon-triangle-right').length > 0;
                                                }).click(function(){
                                                    vm.curr_pg = vm.curr_pg + 1;

                                                    if(vm.curr_pg > vm.total_pgs)
                                                        vm.curr_pg = vm.total_pgs;

                                                    console.log("Current Page",vm.curr_pg);
                                                    
                                                    if(vm.curr_pg >= 1 && vm.curr_pg <= vm.total_pgs)
                                                        vm.pager(vm.page_sz,vm.curr_pg-1);
                                                    if(vm.curr_pg >= vm.total_pgs)   
                                                        vm.pager(vm.page_sz,vm.curr_pg-1)
                                                });

                                           
                                        }

                                }
                            },
                            computed: {
                                collection_nm : {
                                    
                                    get: function(){
                                        return this.collection_name;
                                    },
                                    set: function(cname){
                                        this.collection_name = cname;
                                        console.log("Collection Name: ",this.collection_name);
                                    }
                                },
                                container_nms : {
                                    get: function(){
                                        return this.container_names;
                                    },
                                    set: function(ctnames){
                                        this.container_names = ctnames;
                                        console.log("Container Names: ",this.container_names);
                                    }
                                },
                                row_s : {
                                    get: function(){
                                        return this.rows;
                                    },
                                    set: function(rws){
                                        this.rows = rws;
                                        console.log("Alters Rows ",this.rows);
                                    }
                                },
                                page_sz : {
                                    get: function(){
                                        return this.pagesize;
                                    },
                                    set: function(ps){
                                        this.pagesize = ps;
                                        console.log("Page Size ",this.pagesize);
                                    }
                                },
                                curr_pg : {
                                    get: function(){
                                        return this.current_page;
                                    },
                                    set: function(cp){
                                        this.current_page = cp;
                                        console.log("Current Page: ",this.current_page);
                                    }
                                },
                                total_pgs : {
                                    get: function(){
                                        return this.total_pages;
                                    },
                                    set: function(tp){
                                        this.total_pages = tp;
                                        console.log("Total Pages: ",this.total_pages);
                                    }
                                }
                            }
                        });
                  
       
                        //alert(JSON.stringify(jobj));
                    }
                };
                xmlhttp.open("GET", "getListItems.php?getList=" + str, true);
                xmlhttp.send();
            });
    </script>
</head>
<body class="fixed-header pattern-bg">
		
		<!-- HEADER CODE BEGINS - same as the other pages - actual page is selected in the menu -->
		<div id="header-container">
			<header>
				<div class="menushape">
					<img src="img/shape2.png" alt="">
				</div>
				<div class="container">
					<div class="row">
						<h1 class="title"><a href="index.html">Sample Site</a></h1>
					
						<div class="hidden-xs">
							<div class="social">Pellentesque vitae faucibus ex. Maecenas hendrerit sit amet felis in semper. Quisque rutrum augue sit amet justo cursus, vel tincidunt dui posuere. Vivamus sit amet elementum purus. In quis sapien et ante facilisis pulvinar eu eu massa. Etiam eget tincidunt purus. 
                           
						</div>
					</div>
				</div>
				<div class="menubar">
					<div class="container">
						<div class="row">
							<div class="btn-advs msb"><i class="fa fa-search"></i></div>
							<div id="toggle-menu"><i class="fa fa-bars"></i></div>
							<nav>
								<ul>
									<li><a href="about.html">About us</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</header>
		</div>
		<!-- HEADER CODE ENDS -->
		

				
		<section  id="search-results" v-cloak>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1>Collection Name: {{ collection_name }}</h1>
						<h4 v-for="name in container_names">Container Name:{{ name }}</h4>
					</div>
                </div>
                
                <div class="container">                                                       
                    <div style="top:2em" class="dropdown pagesize-dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">Select Page Size
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a v-on:click="setpagesize" data-pagesize="5" href="#">5</a></li>
                            <li><a v-on:click="setpagesize" data-pagesize="10" href="#">10</a></li>
                            <li><a v-on:click="setpagesize" data-pagesize="15" href="#">15</a></li>
                        </ul>
                    </div>
                </div>
				<div class="pull-right" v-if="count>0">
                    
                    <h5>{{ count }} results</h5>
                </div>
            </div>
            <div class = "container-fluid">
                <table id = "results_table" class="table table-bordered">
                    <thead> 
                        <tr> 
                            <div class="row project-title">
                                <template v-for="header in headers">
                                    <div v-if="header == 'picture'" class="col-sm-3">
                                        <th><a href="#">pic</a></th>						
                                    </div>
                                    <div v-if="header == 'title'" class="col-sm-3">
                                        <th><a href="#">title</a></th>
                                    </div>
                                    <div v-if="header == 'year'" class="col-sm-3">
                                        <th><a href="#">year</a></th>
                                    </div>
                                    <div v-if="header == 'description'" class="col-sm-3 hidden-xs">
                                        <th>description</th>
                                    </div>
                                </template> 
                            </div>  
                        </tr>
                    </thead>
                    
                    <tbody>                         
                        <template v-for = "(row,index) in row_s">
                            <div class="row project-item" :id="ids[index]" v-on:mouseover="collection(ids[index])">
                                <tr>
                                    <a href="#" v-on:click="createview">
                                        <div v-if="row.image !== 'undefined'" class="col-sm-3">
                                            <td><img :src=row.image alt=""></td>
                                        </div>
                                        <div v-if="row.title !== 'undefined'" class="col-sm-3 col">
                                            <td>
                                                <span>Title</span>
                                                {{ row.title }}
                                            </td>
                                        </div>
                                        <div v-if="row.year !== 'undefined'" class="col-sm-3 col">
                                            <td>
                                                <span>Year</span>
                                                {{ row.year }} 
                                            </td>
                                        </div>
                                        <div v-if="row.description != 'undefined'" class="col-sm-3">
                                            <td>{{ row.description }}</td>
                                        </div>
                                    </a>
                                </tr>
                            </div>
                        </template>                                
                    </tbody>  
                </table>
            
            </div>        
			<div class="container">
				<div class="row">
					<div class="col-md-12">
                        <div class="pagination">
							<a href="#"><i class="glyphicon glyphicon-triangle-left"></i></a>
							<a v-on:click="setpage" data-page="1" href="#" class="page-selected">1</a>
							<a v-on:click="setpage" data-page="2" href="#">2</a>
							<a v-on:click="setpage" data-page="3" href="#">3</a>
							<a v-on:click="setpage" data-page="4" href="#">4</a>
							<a v-on:click="setpage" data-page="5" href="#">5</a>
							<a href="#"><i class="glyphicon glyphicon-triangle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
		<!-- FOOTER CODE BEGIN - same as the other pages -->
		<footer>
			<div class="container">
				<div class="row part1">
					<div class="col-md-12">
						<nav>
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><a href="about.html">About us</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<div class="row part2">
					<div class="col-md-5 left-side">

					</div>
					<div class="col-md-5 right-side">
						<div class="social">
							<a href="#"><img src="img/social/twitter_b.png" alt="Twitter"></a>
							<a href="#"><img src="img/social/facebook_b.png" alt="Facebook"></a>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- FOOTER CODE ENDS - the scripts bellow are the same too -->
		  
  	</body>