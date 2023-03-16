<?php
class Starter extends CI_Controller {
    public function _construct()
    {
        parent::_construct();
      
    }
    
    public function index()
    {
        // load the fuel_page library class and pass
        // it the view file you want to load
        
        
      
       	$this->fuel->pages->render('othello/othello.php');
        
        
    }
    
     public function test($num=8){
    	echo $num;
    }
    
    
    public function othello(){
    /*	$head = new DOMdocument();
    	$head->loadHTML($this->load->view('othello/othello'));
    	$board = new DOMdocument();
    	$board->loadHTML($this->load->view('othello/myinitboard'));
    	$head->append($board);
       	echo file_put_contents('othello/othello',$head);
       	*/
       	$this->fuel->pages->render('othello/othello');
       	//$this->load->view('myinitboard');
       echo "gets here too";
    }
    
    
     public function othelloMode(){
		// Initialize Game Tables in Database
       
        $theBody = $this->load->view("othello/myinitboard","",TRUE);
        echo $theBody;
        
        console_log($theBody);
        updateInitBoard($theBody);
        updateMyBoard($theBody);
        updateTheBody2($theBody);
				           
					  
					  	
	  	 $GLOBALS["symbol"] = $vars["symbol"];	
		 $GLOBALS["message"] ="<span id='prbutton' style='color:purple'>**Press button to Play!**<br/>Your Symbol is ".$GLOBALS['symbol']."</span>"; 
			// Display Board
		 $GLOBALS["flag"] = 'no';  
	
  	     // Send to header to load correct CSS files
		 $GLOBALS['whichPage'] = "othello";
	
		//Load header, Page, and Footer\
	
		$this->load->view('othello/othello');
		$this->load->view('othello/myinitboard');
		$this->load->view('othello/footer'); 
    }
		

	        
  public function updateInitBoard($initBoard){
		    $myModel = $this->load->model('OthelloBoards_model');	
		    
			$initBoard = base64_encode($initBoard);	
			$values = array();
			$where = array();
			$values['initBoard'] = $initBoard;
			$where['rowNum'] = 1;
		    
		    $result = $this->OthelloBoards_model->update($values,$where);
		    if ($result) {
			    console_log("initBoard Table updated successfully");
			} else {
			    console_log("initBoard Table did not update");
			}
		    
    }    

  public function updateMyBoard($myBoard){
           
		    $myModel = $this->load->model('OthelloBoards_model');	
		    
			$myBoard = base64_encode($myBoard);	
			$values = array();
			$where = array();
			$values['myBoard'] = $myBoard;
			$where['rowNum'] = 1;
		    
		    $result = $this->OthelloBoards_model->update($values,$where);
		    if ($result) {
			    console_log("myBoard Table updated successfully");
			} else {
			    console_log("myBoard Table did not update");
			}
    }   
  
  
   public function updateTheBody2($theBody2){
		    $myModel = $this->load->model('OthelloBoards_model');	
		    
			$theBody2 = base64_encode($theBody2);	
			$values = array();
			$where = array();
			$values['theBody2'] = $theBody2;
			$where['rowNum'] = 1;
		    
		    $result = $this->OthelloBoards_model->update($values,$where);
		    if ($result) {
			    console_log("theBody2 Table updated successfully");
			} else {
			    console_log("theBody2 Table did not update");
			}
    }   
    
   function selectTable($table){
  	  $myModel = $this->load->model('OthelloBoards_model');
		
		$sql = 'SELECT '.$table.' from boards WHERE rowNum=1';
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        $file = $row[$table];
		        $file = base64_decode($file);
		    }
		} else {
		    echo "0 results";
		}
        $conn->close(); 
           
        //$this->console_log($file);
        return $file;
  	
  }
     


 public function console_log( $data ) {
	  $output  = "<script>console.log( 'PHP debugger: ";
	  $output .= json_encode(print_r($data, true));
	  $output .= "' );</script>";
	  echo $output;
    }

    
    
    
    
}