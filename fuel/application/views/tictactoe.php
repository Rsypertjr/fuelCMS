<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Tic Tac Toe</title>
    <script src="https://unpkg.com/react@17/umd/react.development.js"></script>
    <script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Don't use this in production: -->
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    <script>
        window.addEventListener('mousedown',function(e){
            document.body.classList.add('mouse-navigation');
            document.body.classList.remove('kbd-navigation');
        });
        window.addEventListener('keydown', function(e){
            if(e.keyCode === 9){
                document.body.classList.add('kbd-navigation');
                document.body.classList.remove('mouse-navigation');
            }
        });
        window.addEventListener('click', function(e){
            if(e.target.tagName === 'A' && e.target.getAttribute('href') === '#'){
                e.preventDefault();
            }
        });
        window.onerror = function(message, source, line, col, error){
            var text = error ? error.stack || error : message + '(at ' + source + ':' + line + ':' + col + ')';
            errors.textContent += text + '\n';
            errors.style.display = '';
        };
        console.error = (function(old){
            return function error(){
                errors.textContent += Array.prototype.slice.call(arguments).join(' ') + '\n';
                errors.style.display ='';
                old.apply(this. arguments);
            }
        });
    </script>
    <script type="text/babel">

     /*
        class Square extends React.Component{
            render() {
                return (
                    <button 
                        className="square" 
                        onClick = { () => this.props.onClick({value:'X'})}
                    >
                        {this.props.value}
                    </button>
                );
            }
        }
        */

        function Square(props){
            return (
                <button className = {`square square-${props.idx}${props.idy}`} onClick={props.onClick}>
                    {props.value} 
                </button>
            );
        }

        function Order(props){
            return(
                <button className="toggle-order" onClick={props.onTClick}>{props.value}</button>
            );
        }

        class Board extends React.Component {      
          /*
            renderSquare(i){               

                return (
                    <Square 
                        value={idx[i]}
                        onClick={() => this.props.onClick(i)}
                    />
                 );
            }
            */

            render() {
                /*
                return(
                    <div>
                        <div className="status">{status}</div>
                        <div className="board-row">
                            {this.renderSquare(0)}
                            {this.renderSquare(1)}
                            {this.renderSquare(2)}
                        </div>
                        <div className="board-row">
                            {this.renderSquare(3)}
                            {this.renderSquare(4)}
                            {this.renderSquare(5)}
                        </div>
                        <div className="board-row">
                            {this.renderSquare(6)}
                            {this.renderSquare(7)}
                            {this.renderSquare(8)}
                        </div>
                    </div>
                );
                */
               
                const rows = [[0,1,2],[3,4,5],[6,7,8]];
                return(
                    <div className="board-frame">                       
                        {rows.map((row,index1) => (
                            <div className="board-row">
                                {
                                    row.map((cell,index2) => (
                                        <Square 
                                            value={this.props.squares[cell]}
                                            idx={index1}
                                            idy={index2}
                                            onClick={() => this.props.onClick(cell)}
                                        />
                                    ))}
                            </div>
                        ))}   
                                    
                    </div>
                );

              
            }
        }

        class Game extends React.Component {
            constructor(props) {
                super(props);
                this.state = {
                    history: [{
                        squares: Array(9).fill(null),
                        lastmove: Array(2).fill(null),
                    }],
                    stepNumber: 0,
                    xIsNext: true,
                   ascending:true,
                };
               
            }

            handleClick(i){
                const history = this.state.history.slice(0,this.state.stepNumber + 1);
                const current = history[history.length - 1];
                const squares = current.squares.slice();
                const col = (i % 3) + 1;
                let row = 0;
                if(i<3) row = 1;
                else if(i >= 3 && i < 6) row = 2;
                else if(i >= 6 && i < 9) row = 3;
                if(calculateWinner(squares) || squares[i]){
                    return;
                }
                squares[i] = this.state.xIsNext ? 'X' : 'O';
               
                this.setState({
                    history: history.concat([{
                        squares: squares,
                        lastmove : [row,col]
                    }]),
                    stepNumber: history.length,
                    xIsNext: !this.state.xIsNext,
                   ascending:true,
                    
                });
              
                let el = '.square-'+(row-1)+(col-1);
                $(el).css('font-size','25px');
                $(el).animate({fontSize: '75px'});

            }

            handleToggle(){
                this.state.ascending = !this.state.ascending
                this.setState({
                    history: this.state.history.reverse(),                  
                });      
            }

            jumpTo(step){
                let el = '.square';
                $(el).css('background-color','white');
                this.setState({
                    stepNumber: step,
                    xIsNext: (step % 2) === 0,
                });
                let content = this.state.history[step].squares.filter(
                    function(square){return square != null;
                    });

                if(content.length == 0){
                    const hist = {
                            squares: Array(9).fill(null),
                            lastmove: Array(2).fill(null),
                        };
                    this.setState({
                        stepNumber: 0,
                        history : [hist]
                    });
                    $('.pyro').css('display','none'); 
                    $('.game').addClass('shimmer');
                }
            }

            gameEnd(current){                
                let gameEnd = current.squares.filter(function(square){
                        return square != null;
                    });
                   
                if(gameEnd.length == 9)
                    return true;
                else
                    return false;
            }

            render() {
                const history = this.state.history;
                const current = history[this.state.stepNumber];
                const winner = calculateWinner(current.squares);
                let finished = false;
                
                finished = this.gameEnd(current);

                let order;
                if(this.state.ascending)
                    order = "Ascending Moves";
                else
                    order = "Descending Moves";

                const moves = history.map((step, move) => {
                    let desc = move;
                    
                    if(step.lastmove[1] != null){
                        desc = 'Go to move #' + move;
                            return (
                                <li key={move}>
                                    <p>Last Move: Row: {step.lastmove[0]}, Column: {step.lastmove[1]}</p>
                                    <button onClick={() => this.jumpTo(move)}><b>{desc}</b></button>
                                </li>
                            );                
                    }
                    else if(step.lastmove[1] == null){
                        desc = 'Go to game start';
                        return (                           
                            <li key={move}>     
                                <p>Let's get started!</p>                         
                                <button onClick={() => this.jumpTo(move)}>{desc}</button>
                            </li>
                        );
                    }
                   
                });

                let status;
                if(!winner && finished)
                    status = "GAME IS A DRAW!";
                else{
                    if (winner){
                        status = 'Winner: ' + winner;
                        $('.pyro').css('display','block');
                        $('.game').removeClass('shimmer');
                    } else {
                        status = "Next player: " + (this.state.xIsNext ? 'X' : 'O');
                    }
                }

                return (
                    <div className="game shimmer">
                        <div class="pyro">
                            <div class="before"></div>
                            <div class="after"></div>
                        </div>
                        <h1 className="top"><font color="lightBlue">TIC</font> <font color="blueviolet">TAC</font> TOE</h1>
                        <div className="game-board box">
                            <Board 
                                squares={current.squares}
                                onClick={(i) => this.handleClick(i)}
                            />
                            
                        </div> 
                        <div className="game-info">
                                <div className="status">                           
                                    {status}
                                </div>
                                <Order 
                                        value = {order}
                                        onTClick={() => this.handleToggle()}
                                    />
                                <div>{status}</div>
                                <ol>{moves}</ol> 
                            </div>
                        
                    </div>
                )
            }
        }

        function calculateWinner(squares){
            const lines = [
                [0,1,2],
                [3,4,5],
                [6,7,8],
                [0,3,6],
                [1,4,7],
                [2,5,8],
                [0,4,8],
                [2,4,6]
            ];
            for (let i = 0; i < lines.length; i++){
                const [a, b, c] = lines[i];
                if (squares[a] && squares[a] === squares[b] && squares[a] === squares[c]){

                    const col = (a % 3) + 1;
                    let row = 0;
                    if(a<3) row = 1;
                    else if(a >= 3 && a < 6) row = 2;
                    else if(a >= 6 && a < 9) row = 3;
                    let el = '.square-'+(row-1)+(col-1);
                    $(el).css('background-color','yellow');

                    const col2 = (b % 3) + 1;
                    let row2 = 0;
                    if(b<3) row2 = 1;
                    else if(b >= 3 && b < 6) row2 = 2;
                    else if(b >= 6 && b < 9) row2 = 3;
                    let el2 = '.square-'+(row2-1)+(col2-1);
                    $(el2).css('background-color','yellow');

                    const col3 = (c % 3) + 1;
                    let row3 = 0;
                    if(c<3) row3 = 1;
                    else if(c >= 3 && c < 6) row3 = 2;
                    else if(c >= 6 && c < 9) row3 = 3;
                    let el3 = '.square-'+(row3-1)+(col3-1);
                    $(el3).css('background-color','yellow');

                    return squares[a];
                }
            }
            return null;
        }

        // =========================================================

        ReactDOM.render(
            <Game />,
            document.getElementById('root')
        );

    </script>
    <style>
        body {
            font: 14px "Century Gothic", Futura, sans-serif;
            margin: 20px;
            width:120em;
            height:65em;
        }

        ol, ul {
            padding-left: 30px;
        }
        .board-frame {
            position:relative;
            width:100%;
        }
       
        .board-row:after {
            clear:both;
            content: "";
            display: table;
        }

        .status {
            margin-bottom: 10px;
            color:blueviolet;
            font-size: 1.5em;
        }

        .square {
            background: rgb(219, 246, 253);
            border: 3px solid #999;
            float: left;
            font-size:25px;
            animation-name: symbol;
            animation-duration: 1s;
            font-weight:bold;
            line-height: 34px;
            height:80px;
            margin-right: -1px;
            margin-top: -1px;
            padding: 0;
            text-align: center;
            width:80px;
        }

        @keyframes symbol {
            from {font-size: 0px;}
            to {font-size: 75px;}
        }


        .square:focus{
            outline: none;
        }

        .kbd-navigation .square:focus {
            background: #ddd;
        }

        .game-board{
            position: relative;
            float:left;
            width:auto;
            height:auto;
            padding:1em;
            margin:5% 0 0% 15%;
            border:10px double black;
        }
        .game-info{
            position:relative;
            width:auto;
            height:45%;
            padding:1em;
            border:1px solid black; 
            float:right;
            margin:5% 15% 0 5%;
            overflow-y:scroll;
            border:10px groove black;
        }
        .game {
           position:relative;
           width:60%;
           height:80%;
           margin:5% 0 0 20%;
           border-radius: 80px;
           background-color:rgba(49, 47, 47, 0.918);
           overflow:hidden;
        }
        

        .game-info {
            margin-left: 20px;
        }

        .show-move {
            display:block;
        }

        .hide-move {
            display:none;
        }
        .toggle-order{
            margin-bottom:1em;
        }

        .top {
            text-align:center;
            font-size:45px;
        }

        #root {
            position:relative;
            width:100%;
            height:100%;
        }

        body {
            margin: 0;
            padding: 0;            
           
          
        }


        .pyro {
            
            display:none;
            }
        .pyro > .before, .pyro > .after {
            position: absolute;
            width: 5px;
            height: 5px;
            border-radius: 50%;
            box-shadow: -120px -218.66667px blue, 248px -16.66667px #00ff84, 190px 16.33333px #002bff, -113px -308.66667px #ff009d, 
                        -109px -287.66667px #ffb300, -50px -313.66667px #ff006e, 226px -31.66667px #ff4000, 180px -351.66667px #ff00d0, 
                        -12px -338.66667px #00f6ff, 220px -388.66667px #99ff00, -69px -27.66667px #ff0400, -111px -339.66667px #6200ff, 
                        155px -237.66667px #00ddff, -152px -380.66667px #00ffd0, -50px -37.66667px #00ffdd, -95px -175.66667px #a6ff00, 
                        -88px 10.33333px #0d00ff, 112px -309.66667px #005eff, 69px -415.66667px #ff00a6, 168px -100.66667px #ff004c, 
                        -244px 24.33333px #ff6600, 97px -325.66667px #ff0066, -211px -182.66667px #00ffa2, 236px -126.66667px #b700ff, 
                        140px -196.66667px #9000ff, 125px -175.66667px #00bbff, 118px -381.66667px #ff002f, 144px -111.66667px #ffae00, 
                        36px -78.66667px #f600ff, -63px -196.66667px #c800ff, -218px -227.66667px #d4ff00, -134px -377.66667px #ea00ff, 
                        -36px -412.66667px #ff00d4, 209px -106.66667px #00fff2, 91px -278.66667px #000dff, -22px -191.66667px #9dff00, 
                        139px -392.66667px #a6ff00, 56px -2.66667px #0099ff, -156px -276.66667px #ea00ff, -163px -233.66667px #00fffb, 
                        -238px -346.66667px #00ff73, 62px -363.66667px #0088ff, 244px -170.66667px #0062ff, 224px -142.66667px #b300ff, 
                        141px -208.66667px #9000ff, 211px -285.66667px #ff6600, 181px -128.66667px #1e00ff, 90px -123.66667px #c800ff, 
                        189px 70.33333px #00ffc8, -18px -383.66667px #00ff33, 100px -6.66667px #ff008c;
            -moz-animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards;
            -webkit-animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards;
            -o-animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards;
            -ms-animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards;
            animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards; 
        }

        .pyro > .after {
            -moz-animation-delay: 1.25s, 1.25s, 1.25s;
            -webkit-animation-delay: 1.25s, 1.25s, 1.25s;
            -o-animation-delay: 1.25s, 1.25s, 1.25s;
            -ms-animation-delay: 1.25s, 1.25s, 1.25s;
            animation-delay: 1.25s, 1.25s, 1.25s;
            -moz-animation-duration: 1.25s, 1.25s, 6.25s;
            -webkit-animation-duration: 1.25s, 1.25s, 6.25s;
            -o-animation-duration: 1.25s, 1.25s, 6.25s;
            -ms-animation-duration: 1.25s, 1.25s, 6.25s;
            animation-duration: 1.25s, 1.25s, 6.25s; 
        }

        @-webkit-keyframes bang {
            from {
                box-shadow: 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white; } }
            @-moz-keyframes bang {
            from {
                box-shadow: 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white; } }
            @-o-keyframes bang {
            from {
                box-shadow: 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white; } }
            @-ms-keyframes bang {
            from {
                box-shadow: 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white; } }
            @keyframes bang {
            from {
                box-shadow: 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white; } }
            @-webkit-keyframes gravity {
            to {
                    transform: translateY(200px);
                    -moz-transform: translateY(200px);
                    -webkit-transform: translateY(200px);
                    -o-transform: translateY(200px);
                    -ms-transform: translateY(200px);
                    opacity: 0; 
                }
        }
        @-moz-keyframes gravity {
            to {
                    transform: translateY(200px);
                    -moz-transform: translateY(200px);
                    -webkit-transform: translateY(200px);
                    -o-transform: translateY(200px);
                    -ms-transform: translateY(200px);
                    opacity: 0;
                } 
        }
        @-o-keyframes gravity {
            to {
                    transform: translateY(200px);
                    -moz-transform: translateY(200px);
                    -webkit-transform: translateY(200px);
                    -o-transform: translateY(200px);
                    -ms-transform: translateY(200px);
                    opacity: 0; 
                } 
        }
        @-ms-keyframes gravity {
            to {
                    transform: translateY(200px);
                    -moz-transform: translateY(200px);
                    -webkit-transform: translateY(200px);
                    -o-transform: translateY(200px);
                    -ms-transform: translateY(200px);
                    opacity: 0; 
                }
        }
        @keyframes gravity {
            to {
                    transform: translateY(200px);
                    -moz-transform: translateY(200px);
                    -webkit-transform: translateY(200px);
                    -o-transform: translateY(200px);
                    -ms-transform: translateY(200px);
                    opacity: 0; 
                } 
        }

        @-webkit-keyframes position {
            0%, 19.9% {
                margin-top: 10%;
                margin-left: 40%; 
            }

            20%, 39.9% {
                margin-top: 40%;
                margin-left: 30%; 
            }

            40%, 59.9% {
                margin-top: 20%;
                margin-left: 70%; 
            }

            60%, 79.9% {
                margin-top: 30%;
                margin-left: 20%; 
            }

            80%, 99.9% {
                margin-top: 30%;
                margin-left: 80%; 
            }
        }
        @-moz-keyframes position {
            0%, 19.9% {
                margin-top: 10%;
                margin-left: 40%; 
            }

            20%, 39.9% {
                margin-top: 40%;
                margin-left: 30%; 
            }

            40%, 59.9% {
                margin-top: 20%;
                margin-left: 70%; 
            }

            60%, 79.9% {
                margin-top: 30%;
                margin-left: 20%; 
            }

            80%, 99.9% {
                margin-top: 30%;
                margin-left: 80%; 
            } 
        }
        @-o-keyframes position {
            0%, 19.9% {
                margin-top: 10%;
                margin-left: 40%; 
            }

            20%, 39.9% {
                margin-top: 40%;
                margin-left: 30%; 
            }

            40%, 59.9% {
                margin-top: 20%;
                margin-left: 70%; 
            }

            60%, 79.9% {
                margin-top: 30%;
                margin-left: 20%; 
            }

            80%, 99.9% {
                margin-top: 30%;
                margin-left: 80%; 
            } 
        }
        @-ms-keyframes position {
            0%, 19.9% {
                    margin-top: 10%;
                    margin-left: 40%; 
                }

            20%, 39.9% {
                    margin-top: 40%;
                    margin-left: 30%; 
                }

            40%, 59.9% {
                    margin-top: 20%;
                    margin-left: 70%; 
                }

            60%, 79.9% {
                    margin-top: 30%;
                    margin-left: 20%; 
                }

            80%, 99.9% {
                    margin-top: 30%;
                    margin-left: 80%; 
                } 
        }
        @keyframes position {
            0%, 19.9% {
                    margin-top: 10%;
                    margin-left: 40%; 
                }

            20%, 39.9% {
                    margin-top: 40%;
                    margin-left: 30%; 
                }

            40%, 59.9% {
                    margin-top: 20%;
                    margin-left: 70%; 
                }

            60%, 79.9% {
                    margin-top: 30%;
                    margin-left: 20%; 
                }

            80%, 99.9% {
                    margin-top: 30%;
                    margin-left: 80%; 
                } 
        }

        .shimmer {
            background: linear-gradient(270deg, #ffdea9, #647a93);
            background-size: 400% 400%;

            -webkit-animation: shimmer 30s ease infinite;
            -moz-animation: shimmer 30s ease infinite;
            animation: shimmer 30s ease infinite;
        }

        @-webkit-keyframes shimmer {
            0%{background-position:0% 50%}
            50%{background-position:100% 50%}
            100%{background-position:0% 50%}
        }
        @-moz-keyframes shimmer {
            0%{background-position:0% 50%}
            50%{background-position:100% 50%}
            100%{background-position:0% 50%}
        }
        @keyframes shimmer { 
            0%{background-position:0% 50%}
            50%{background-position:100% 50%}
            100%{background-position:0% 50%}
        }

                        
    </style>
  </head>
  <body>
        <div id="errors" style="background:#c00;color:#fff;display:none;margin:-20px -20px -20px;padding:20px;white-space:pre-wrap">
        </div>
        <div id="root"></div>
        
    </body>
</html>
