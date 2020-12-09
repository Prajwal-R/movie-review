<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="add_review" method="post">
        @csrf
        
        <input type="text" placeholder="enter movie name" name="movie_name">
        <br>
        <input type="text" placeholder="poster link" name="poster">
        <br>
        <select name="language" id="">
            <option value="English">English</option>
            <option value="Hindi">Hindi</option>
            <option value="Kannada">Kannada</option>
            <option value="Telugu">Telugu</option>
            <option value="Tamil">Tamil</option>
            <option value="Malayalam">Malayalam</option>            
        </select>
        <br>
        <select name="genre" id="">
            <option value="all">genre</option>
            <option value="action">action</option>
            <option value="Thriller">Thriller</option>
            <option value="adventures">Adventures</option>
            <option value="comedy">comedy</option>
        </select>
        <br>
<input type="text" placeholder="release year" name="date" >

<br>
<input type="text" placeholder="actors" name="actors">
<br>
        <br>
        <label for="Description">Description:</label> 
        <textarea rows="5" cols="50" name="Description"
                            id="Description"></textarea>
                            <br>
                            <br>
                            <a href="/"><input type="submit" class="btn btn-info" value="Submit Button"></a>
    </form>
</body>
</html>