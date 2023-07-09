var PageService = {
    home: function() {
        let popuniti = `<h2 id="usershow">Hello user!</h2>
        <h3>Welcome to RateMyUniversity application.</h3>
        <p><b>Rate my professor:</b> Add a new rating for one of your professors.</p>
        <p><b>Rate my course:</b> Add a new rating for one of your courses.</p>
        <p><b>View rating history:</b> show all your ratings from the past</p>
        <p><b>View my ratings:</b> show how I am rated</p>
        <p><b>Admin:</b> Administration page (for advanced functions)</p>
        <p><b>Log out:</b> Log out of the system.</p>`;
        $('#popunjavanje').empty();
        $('#popunjavanje').append(popuniti);
        $('#a1').addClass('active');
        $('#a2').removeClass('active');
        $('#a3').removeClass('active');
        $('#a4').removeClass('active');
        $('#a5').removeClass('active');
        $('#a6').removeClass('active');
        $('#a7').removeClass('active');
    },
    ratemyprofessor: function() {
        let popuniti = ``;
        $('#popunjavanje').empty();
        $('#popunjavanje').append(popuniti);
        $('#a1').removeClass('active');
        $('#a2').addClass('active');
        $('#a3').removeClass('active');
        $('#a4').removeClass('active');
        $('#a5').removeClass('active');
        $('#a6').removeClass('active');
        $('#a7').removeClass('active');
    },
    ratemycourse: function() {
        let popuniti = ``;
        $('#popunjavanje').empty();
        $('#popunjavanje').append(popuniti);
        $('#a1').removeClass('active');
        $('#a2').removeClass('active');
        $('#a3').addClass('active');
        $('#a4').removeClass('active');
        $('#a5').removeClass('active');
        $('#a6').removeClass('active');
        $('#a7').removeClass('active');
    },
    viewratinghistory: function() {
        let popuniti = ``;
        $('#popunjavanje').empty();
        $('#popunjavanje').append(popuniti);
        $('#a1').removeClass('active');
        $('#a2').removeClass('active');
        $('#a3').removeClass('active');
        $('#a4').addClass('active');
        $('#a5').removeClass('active');
        $('#a6').removeClass('active');
        $('#a7').removeClass('active');
    },
    viewmyratings: function() {
        let popuniti = ``;
        $('#popunjavanje').empty();
        $('#popunjavanje').append(popuniti);
        $('#a1').removeClass('active');
        $('#a2').removeClass('active');
        $('#a3').removeClass('active');
        $('#a4').removeClass('active');
        $('#a5').addClass('active');
        $('#a6').removeClass('active');
        $('#a7').removeClass('active');
    },
    admin: function() {
        let popuniti = ``;
        $('#popunjavanje').empty();
        $('#popunjavanje').append(popuniti);
        $('#a1').removeClass('active');
        $('#a2').removeClass('active');
        $('#a3').removeClass('active');
        $('#a4').removeClass('active');
        $('#a5').removeClass('active');
        $('#a6').addClass('active');
        $('#a7').removeClass('active');
    }
}