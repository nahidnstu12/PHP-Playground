<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">    <title>Search User</title>
    <script>
        function showSuggestion(str){
            let output = document.getElementById('output');
            if(str.length == 0){
                output.innerHTML = ""
            }else{
                // Ajax part
                let http = new XMLHttpRequest();
                http.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200){
                        output.innerHTML = this.responseText;
                    }
                    
                }
                http.open("GET", "suggest.php?q="+str, true);
                http.send();
            }
        }
        function submitUser(){
            // let name = document.getElementById('name').value;
                // Ajax part
                let http = new XMLHttpRequest();
                http.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById("msg").innerHTML= this.responseText;
                        console.log(this.responseText)
                    }
                    
                }
                http.open("POST", "ajax_post.php", true);
                http.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                http.send();
            
        }
        function getUser(){
            
        }
    </script>
</head>
<body>
<?php include("./ajax_post.php") ?>

    <div class="container">
        <h1>Search Users</h1>
        <form> 
            Search User: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
        </form>
        <p>Suggestions: <span id="output" style="font-weight:bold"></span></p>
    </div>
    <hr/>
    <div class="container">
        <h1>Test Ajax post</h1>
        <form method="post" id="user_form">
            <input type="text" placeholder="username" class="form-control m-3" name="username"/>
            <input type="email" placeholder="email" class="form-control m-3" name="email"/>
            <input type="password" placeholder="password" class="form-control m-3" name="password"/>

            <button type="submit" class="btn btn-primary m-3" name="submit" onclick="submitUser()">Submit User</button>
        </form>
        <div id="msg" style="color:red"></div>
    </div>
    <div class="container">
        
        <h1>Users</h1>
        <hr>
        <ul class="list-group list-group-flush">
            <?php getUsers() ?>
        </ul>
        <hr>
        
    </div>
</body>
</html>