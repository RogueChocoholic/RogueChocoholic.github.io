$(document).ready(function () {
  $("#welcomeSub").hide();
  $("#contentsContainer").hide();
  $("#page2Begin").hide();
  $("#downButton1").hide();
  $("#page3Begin").hide();
  $("#page4Begin").hide();

  $(document).mousemove(function () {
    $("#myName").animate(
      {
        marginLeft: "52px",
      },
      600,
      function () {}
    );

    $("#welcome").animate(
      {
        marginLeft: "50px",
      },
      1000,
      function () {}
    );

    $("#welcomeName").animate(
      {
        marginLeft: "50px",
      },
      850,
      function () {}
    );

    $("#welcomeName2").animate(
      {
        marginLeft: "50px",
      },
      1000,
      function () {}
    );

    $("#welcomeSub").fadeIn(1500);
    $("#downButton1").fadeIn(1500);

    $("#contentsContainer").fadeIn(2000);

    $("#goToPageOne").click(function() {
      $("#page2Begin").fadeIn();
    });

    $("#goToPageTwo").click(function() {
      $("#page2Begin").fadeIn();
      $("#page3Begin").fadeIn();
    });

    $("#goToPageThree").click(function() {
      $("#page2Begin").fadeIn();
      $("#page3Begin").fadeIn();
      $("#page4Begin").fadeIn();
    });




    $("#downButton1").click(function() {
      $("#page2Begin").fadeIn(500);
    });

    $("#downButton2").click(function() {
      $("#page3Begin").fadeIn(500);
    });

    $("#downButton3").click(function() {
      $("#page4Begin").fadeIn(500);
    });









  });





});


function say_Size() {
  var w = window.innerWidth;

  alert(w);
  
}


