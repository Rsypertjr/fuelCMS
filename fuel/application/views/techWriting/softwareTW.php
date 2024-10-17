

	  <script type="text/javascript">
		function JQFunctions(){;}
		
		$(document).ready(function(){
		
			
			//alert(position.left);
			$(".spfont").mouseover(function()
				{
					position = $('.spfont').position();
					$('#hovdisp').css('left',(position.left+30));
					$('#hovdisp').css('top',(position.top-5));
				
				
				});
			
		
		});
    </script>

<div id="rpsContainer">
	<h1>How to Develop Rock-Paper-Scissors Game</h1>

	<div class="par1">
		<p class="descmess">A necessary part of the rock-paper-scissors game will be the <b>generateRandom()</b> method implemented into a class.  
		The method will use the C++ <a class="spfont" href="http://www.cplusplus.com/reference/cstdlib/rand/"><font id="randpos" color="blue">rand<span id="hovdisp">Generate random Number</span></font></a> method.
		<p class="descmess">For the 3 game elements (1-rock, 2-paper, 3-scissors), a range of psuedo-random numbers from 0 to 3 needs to be generated. A typical way to do this is:</p>	
		<p class="descex"><span class="leftpart">v1 = rand() % 3 + 1;</span><span class="rightpart"><font color="blue">// v1 in the range 0 to 3</font></span></p>
		<p class="descmess">Another class method would be needed to implement the game logic.  A class could be implemented as follows:</p>
		<p class="descex2">#include<iostream>
							<br/>using namespace std;
							<br/>
							<br/>class <b>RockPaperScissors</b> {
							<br/>&nbsp;&nbsp;&nbsp;private:
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int range = 3;
							<br/>
							<br/>&nbsp;&nbsp;&nbsp;public:
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;string gamePlay(char playerSelect);
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int generateRandom();
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int getComputerPlay();
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;enum gamePiece {Paper=1,Scissors,Rock};
							<br/>};
							<br/>
							<br/>string <b>RockPaperScissors::gamePlay</b>(char playerSelect&nbsp;<font color="blue">//Player Selection</font>)
							<br/>{
							<br/>&nbsp;gamePiece computerSelect = getComputerPlay();&nbsp;&nbsp;&nbsp;  
							<br/>&nbsp;if(playerSelect == Paper)
							<br/>&nbsp;&nbsp;&nbsp;{
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(computerSelect == Scissor)
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return "My Scissors cut your Paper";
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else if(computerSelect == Rock)
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return "Your Paper covers my Rock";
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else if(computerSelect == Paper)
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return "We have a Tie!";
							<br/>&nbsp;&nbsp;&nbsp;}
							<br/>else if(playerSelect == Scissors)
							<br/>&nbsp;&nbsp;&nbsp;{
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(computerSelect == Scissors)
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return "We have a Tie!";
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else if(computerSelect == Rock)
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return "My Rock smashes your Scissors!";
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else if(computerSelect == Paper)
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return "Your Scissor cut my Paper!";
							<br/>&nbsp;&nbsp;&nbsp;}
							<br/>else if(playerSelect == Rock)
							<br/>&nbsp;&nbsp;&nbsp;{
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(computerSelect == Scissors)
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return "Your Rock smashes my Scissors"!
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else if(computerSelect == Rock)
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return "We have a Tie!";
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else if(computerSelect == Paper)
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return "My Paper covers your Rock!";
							<br/>&nbsp;&nbsp;&nbsp;}
							<br/>
							<br/>}
							<br/>string <b>RockPaperScissors::RockPaperScissors</b>(int rng)
							<br/>&nbsp;&nbsp;&nbsp;{
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;range(rng);	
							<br/>&nbsp;&nbsp;&nbsp;}
							<br/>
							<br/>string <b>RockPaperScissors::RockPaperScissors</b>()
							<br/>&nbsp;&nbsp;&nbsp;{
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;range(3);	
							<br/>&nbsp;&nbsp;&nbsp;}
							<br/>
							<br/>int <b>RockPaperScissors::generateRandom()</b> 
							<br/>&nbsp;&nbsp;&nbsp;{
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return (rand() % range + 1);
							<br/>&nbsp;&nbsp;&nbsp;}
							<br/>
							<br/>gamePiece <b>RockPaperScissors::getComputerPlay()</b>
							<br/>&nbsp;&nbsp;&nbsp;{
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rn = generateRandom();
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(rn > 3 && rn <=4)
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return Rock;
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(rn > 2 && rn <=3)
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return Scissors;
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(rn > 1 && rn <=2)
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return Paper;
							<br/>&nbsp;&nbsp;&nbsp;}
							<br/>
							<br/>}
							<br/>
							<br/>
							<br/>int <b>main()</b>
							<br/>&nbsp;&nbsp;&nbsp;{<font color="blue">........</font>
							<br/>&nbsp;&nbsp;&nbsp;}
		</p>
		<p class="descmess">The main program function can be implemented by (1) declaring an object of type RockPaperScissors, then (2) asking the
		game player which weapon they want to choose and store the input, and finally (3) calling the gamePlay method on the RockPaperScissors 
		class object, which outputs the play result.
		
		</p>
		<p class="descex2">
			<br/>int <b>main()</b>
			<br/>&nbsp;&nbsp;&nbsp;{
			<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int weapon;
			<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout << "Please choose your weapon (1-Paper, 2-Scissors, 3-Rock)";
			<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cin >> weapon;
			<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RockPaperScissor game;
			<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout << game.gamePlay(weapon);&nbsp;&nbsp;&nbsp;<font color="blue">//Outputs Play Result</font>
			<br/>&nbsp;&nbsp;&nbsp;}
		</p>
		<p class="descmess">To implement continuous play the above procedure can be put into a loop as follows:
		</p>
		<p class="descex2">
			<br/>int <b>main()</b>
			<br/>&nbsp;&nbsp;&nbsp;{
			<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool playAgain = true;
			<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char playerSelect;
			<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while(playAgain == true);
			<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
			<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int weapon;
			<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char playerSelect;
			<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout << "Please choose your weapon (1-Paper, 2-Scissors, 3-Rock)";
			<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cin >> weapon;
			<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RockPaperScissor game;
			<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout << game.gamePlay(weapon);&nbsp;&nbsp;&nbsp;<font color="blue">//Outputs Play Result</font>
			<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout << "Would you like to play again (y/n)?;
			<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cin >> playerSelect;
			<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while(playerSelect != 'y' || playerSelect != 'n')
			<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
			<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout << "Would you like to play again (y/n)?;
			<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cin >> playerSelect;
			<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
			<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(playerSelect == 'n')
			<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playAgain == false;	
			<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
			<br/>&nbsp;&nbsp;&nbsp;}
		</p>
		<h2>Extend to Rock, Paper, Scissors, Sledgehammer Game</h2>
		
		<p class="descmess">To extend the Rock, Paper, Scissors game to a Rock, Paper, Scissor, Sledgehammer game it is necessary to extend the
				RockPaperScissors class and implement its constructor to set game range of 4 instead of 3.  Also, the gamePlay method has to be overridden
				to include the extra logic for the sledgehammer weapon choice. Lastly, the gamePiece enum, the generateRandom() method, and the getComputerPlay method all 
				need to be overridden by the new class to incorporate the larger game range.
		</p>
		<p class="descex2">#include<iostream>
							<br/>using namespace std;
							<br/>#include "RockPaperScissors.h"&nbsp;&nbsp;&nbsp;<font color="blue">//include base class file</font>
							<br/>
							<br/>class <b>RockPaperScissorsSledgehammer:public RockPaperScissors</b> {
							<br/>
							<br/>&nbsp;&nbsp;&nbsp;public:
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RockPaperScissorsSledgehammer():RockPaperScissor(int range){};
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;string gamePlay(char playerSelect){<font color="blue">........</font>};
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int generateRandom(){<font color="blue">........</font>};
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int getComputerPlay(){<font color="blue">........</font>};
							<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;enum gamePiece {Paper=1,Scissors,Rock,Sledgehammer};
							<br/>};
		
		
		
		
		</p>

	</div>
</div> <!-- /#rpcContainer -->
