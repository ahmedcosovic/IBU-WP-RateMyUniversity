var PageService = {
    home: function() {
        var popuniti = `<h2 id="usershow">Hello user!</h2>
        <h3>Welcome to RateMyUniversity application.</h3>
        <p><b>Rate my professor:</b> Add a new rating for one of your professors.</p>
        <p><b>Rate my course:</b> Add a new rating for one of your courses.</p>
        <p><b>View rating history:</b> show all your ratings from the past</p>
        <p><b>View my ratings:</b> show how I am rated</p>
        <p><b>Admin:</b> Administration page (for advanced functions)</p>
        <p><b>Log out:</b> Log out of the system.</p>`;
        $('#popunjavanje').empty();
        $('#popunjavanje').append(popuniti);
        var loggedUser = LoginService.getLoggedUser();
        document.getElementById("usershow").innerHTML = "Hello " + loggedUser + "!";
        $('#a1').addClass('active');
        $('#a2').removeClass('active');
        $('#a3').removeClass('active');
        $('#a4').removeClass('active');
        $('#a5').removeClass('active');
        $('#a6').removeClass('active');
        $('#a7').removeClass('active');
    },
    ratemyprofessor: function() {
        var popuniti = `<form><br>
    
        <label for="course">Select course:</label>
        <select id="course" name="course" onchange="popuniProf()">
            <option value="default" selected disabled>Please select</option>
        </select>

        <label for="professor">Select professor:</label>
        <select id="professor" name="professor">

        </select>

        <label for="ratecourse">Rate course:</label>
        <select id="ratecourse" name="ratecourse">
          <option value="c1">1</option>
          <option value="c2">2</option>
          <option value="c3">3</option>
          <option value="c4">4</option>
          <option value="c5">5</option>
        </select>

        <label for="rateprofessor">Rate professor:</label>
        <select id="rateprofessor" name="rateprofessor">
          <option value="p1">1</option>
          <option value="p2">2</option>
          <option value="p3">3</option>
          <option value="p4">4</option>
          <option value="p5">5</option>
        </select>

        <label for="notes">Rate professor:</label><br>
        <textarea id="notes" name="notes" rows="10" cols="50" placeholder="Please leave your review here, submissions without a review won't be acknowledged!"></textarea><br>

        <label for="anonymous">Send anonymously:</label>
        <input type="checkbox" id="anonymous" name="anonymous">
      
        <input type="submit" value="Submit" onclick="sendForm()">
      </form>`;
        $('#popunjavanje').empty();
        $('#popunjavanje').append(popuniti);
        $('#a1').removeClass('active');
        $('#a2').addClass('active');
        $('#a3').removeClass('active');
        $('#a4').removeClass('active');
        $('#a5').removeClass('active');
        $('#a6').removeClass('active');
        $('#a7').removeClass('active');
        popuniCourse();
    },
    viewratinghistory: function() {
        var popuniti = `<h2 id="usershow2">Rating history by user:</h2>`;
        $('#popunjavanje').empty();
        $('#popunjavanje').append(popuniti);
        var loggedUser = LoginService.getLoggedUser();
        document.getElementById("usershow2").innerHTML = "Rating history by " + loggedUser + ":";
        $('#a1').removeClass('active');
        $('#a2').removeClass('active');
        $('#a3').removeClass('active');
        $('#a4').addClass('active');
        $('#a5').removeClass('active');
        $('#a6').removeClass('active');
        $('#a7').removeClass('active');
        tabelaStud();
    },
    viewmyratings: function() {
        var popuniti = ``;
        $('#popunjavanje').empty();
        $('#popunjavanje').append(popuniti);
        $('#a1').removeClass('active');
        $('#a2').removeClass('active');
        $('#a3').removeClass('active');
        $('#a4').removeClass('active');
        $('#a5').addClass('active');
        $('#a6').removeClass('active');
        $('#a7').removeClass('active');
    }
}