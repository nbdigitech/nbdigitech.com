
<!--   Core JS Files   -->
<script src="{{url('/')}}/public/assets/js/core/jquery.min.js"></script>
<script src="{{url('/')}}/public/assets/js/core/popper.min.js"></script>
<script src="{{url('/')}}/public/assets/js/core/bootstrap-material-design.min.js"></script>
<script src="{{url('/')}}/public/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Plugin for the momentJs  -->
<script src="{{url('/')}}/public/assets/js/plugins/moment.min.js"></script>
<!--  Plugin for Sweet Alert -->
<script src="{{url('/')}}/public/assets/js/plugins/sweetalert2.js"></script>
<!-- Forms Validations Plugin -->
<script src="{{url('/')}}/public/assets/js/plugins/jquery.validate.min.js"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{url('/')}}/public/assets/js/plugins/jquery.bootstrap-wizard.js"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{url('/')}}/public/assets/js/plugins/bootstrap-selectpicker.js"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script type="text/javascript" src="{{url('/')}}/public/assets/js/bootstrap-selectpicker.js"></script>

<script src="{{url('/')}}/public/assets/js/plugins/bootstrap-datetimepicker.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
<script src="{{url('/')}}/public/assets/js/plugins/jquery.dataTables.min.js"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{url('/')}}/public/assets/js/plugins/bootstrap-tagsinput.js"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{url('/')}}/public/assets/js/plugins/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="{{url('/')}}/public/assets/js/plugins/fullcalendar.min.js"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="{{url('/')}}/public/assets/js/plugins/jquery-jvectormap.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{url('/')}}/public/assets/js/plugins/nouislider.min.js"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<!-- Library for adding dinamically elements -->
<script src="{{url('/')}}/public/assets/js/plugins/arrive.min.js"></script>
<!--  Google Maps Plugin    -->


<script src="{{url('/')}}/public/assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="{{url('/')}}/public/assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{url('/')}}/public/assets/js/material-dashboard.minf066.js?v=2.1.0" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{url('/')}}/public/assets/demo/demo.js"></script>
<script>
  $(document).ready(function() {
    $().ready(function() {
      $sidebar = $('.sidebar');

      $sidebar_img_container = $sidebar.find('.sidebar-background');

      $full_page = $('.full-page');

      $sidebar_responsive = $('body > .navbar-collapse');

      window_width = $(window).width();

      fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

      if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
        if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
          $('.fixed-plugin .dropdown').addClass('open');
        }

      }

      $('.fixed-plugin a').click(function(event) {
// Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
if ($(this).hasClass('switch-trigger')) {
  if (event.stopPropagation) {
    event.stopPropagation();
  } else if (window.event) {
    window.event.cancelBubble = true;
  }
}
});

      $('.fixed-plugin .active-color span').click(function() {
        $full_page_background = $('.full-page-background');

        $(this).siblings().removeClass('active');
        $(this).addClass('active');

        var new_color = $(this).data('color');

        if ($sidebar.length != 0) {
          $sidebar.attr('data-color', new_color);
        }

        if ($full_page.length != 0) {
          $full_page.attr('filter-color', new_color);
        }

        if ($sidebar_responsive.length != 0) {
          $sidebar_responsive.attr('data-color', new_color);
        }
      });

      $('.fixed-plugin .background-color .badge').click(function() {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');

        var new_color = $(this).data('background-color');

        if ($sidebar.length != 0) {
          $sidebar.attr('data-background-color', new_color);
        }
      });

      $('.fixed-plugin .img-holder').click(function() {
        $full_page_background = $('.full-page-background');

        $(this).parent('li').siblings().removeClass('active');
        $(this).parent('li').addClass('active');


        var new_image = $(this).find("img").attr('src');

        if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
          $sidebar_img_container.fadeOut('fast', function() {
            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $sidebar_img_container.fadeIn('fast');
          });
        }

        if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
          var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

          $full_page_background.fadeOut('fast', function() {
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
            $full_page_background.fadeIn('fast');
          });
        }

        if ($('.switch-sidebar-image input:checked').length == 0) {
          var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
          var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

          $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
          $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
        }

        if ($sidebar_responsive.length != 0) {
          $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
        }
      });

      $('.switch-sidebar-image input').change(function() {
        $full_page_background = $('.full-page-background');

        $input = $(this);

        if ($input.is(':checked')) {
          if ($sidebar_img_container.length != 0) {
            $sidebar_img_container.fadeIn('fast');
            $sidebar.attr('data-image', '#');
          }

          if ($full_page_background.length != 0) {
            $full_page_background.fadeIn('fast');
            $full_page.attr('data-image', '#');
          }

          background_image = true;
        } else {
          if ($sidebar_img_container.length != 0) {
            $sidebar.removeAttr('data-image');
            $sidebar_img_container.fadeOut('fast');
          }

          if ($full_page_background.length != 0) {
            $full_page.removeAttr('data-image', '#');
            $full_page_background.fadeOut('fast');
          }

          background_image = false;
        }
      });

      $('.switch-sidebar-mini input').change(function() {
        $body = $('body');

        $input = $(this);

        if (md.misc.sidebar_mini_active == true) {
          $('body').removeClass('sidebar-mini');
          md.misc.sidebar_mini_active = false;

          $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

        } else {

          $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

          setTimeout(function() {
            $('body').addClass('sidebar-mini');

            md.misc.sidebar_mini_active = true;
          }, 300);
        }

// we simulate the window Resize so the charts will get updated in realtime.
var simulateWindowResize = setInterval(function() {
  window.dispatchEvent(new Event('resize'));
}, 180);

// we stop the simulation of Window Resize after the animations are completed
setTimeout(function() {
  clearInterval(simulateWindowResize);
}, 1000);

});
    });
});
</script>
<!-- Sharrre libray -->
<script src="{{url('/')}}/public/assets/demo/jquery.sharrre.js"></script>


<script>
  $(document).ready(function() {
// Javascript method's body can be found in assets/js/demos.js
md.initDashboardPageCharts();

md.initVectorMap();

});
</script>

<script type="text/javascript">
$(document).on({
    "contextmenu": function(e) {
        console.log("ctx menu button:", e.which); 

        // Stop the context menu
        e.preventDefault();
    },
    "mousedown": function(e) { 
        console.log("normal mouse down:", e.which); 
    },
    "mouseup": function(e) { 
        console.log("normal mouse up:", e.which); 
    }
});
</script>

<script type="text/javascript">
    history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };

</script>

 <script>
    $(document).ready(function() {
      // initialise Datetimepicker and Sliders
      md.initFormExtendedDatetimepickers();
      if ($('.slider').length != 0) {
        md.initSliders();
      }
    });
  </script>

<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=hbv8i0owgf4bdjcle04xwsntpkdo1qpdnqmi2efdsoiao8tw"></script>
<script type="text/javascript">




var mentionsFetchFunction = function (query, success) {
var users = [
  "Terry Green", "Edward Carroll", "Virginia Turner", "Alexander Schneider", "Gary Vasquez", "Randy Howell",
  "Katherine Moore", "Betty Washington", "Grace Chapman", "Christina Nguyen", "Danielle Rose", "Thomas Freeman",
  "Thomas Armstrong", "Vincent Lee", "Brittany Kelley", "Brenda Wheeler", "Amy Price", "Hannah Harvey",
  "Bobby Howard", "Frank Fox", "Diane Hopkins", "Johnny Hawkins", "Sean Alexander", "Emma Roberts", "Thomas Snyder",
  "Thomas Allen", "Rebecca Ross", "Amy Boyd", "Kenneth Watkins", "Sarah Tucker", "Lawrence Burke", "Emma Carr",
  "Zachary Mason", "John Scott", "Michelle Davis", "Nicholas Cole", "Gerald Nelson", "Emily Smith", "Christian Stephens",
  "Grace Carr", "Arthur Watkins", "Frances Baker", "Katherine Cook", "Roger Wallace", "Pamela Arnold", "Linda Barnes",
  "Jacob Warren", "Billy Ramirez", "Pamela Walsh", "Paul Wade", "Katherine Campbell", "Jeffrey Berry", "Patrick Bowman",
  "Dennis Alvarez", "Crystal Lucas", "Howard Mendoza", "Patricia Wallace", "Peter Stone", "Tiffany Lane", "Joe Perkins",
  "Gloria Reynolds", "Willie Fernandez", "Doris Harper", "Heather Sandoval", "Danielle Franklin", "Ann Ellis",
  "Christopher Hernandez", "Pamela Perry", "Matthew Henderson", "Jesse Mitchell", "Olivia Reed", "David Clark", "Juan Taylor",
  "Michael Garrett", "Gerald Guerrero", "Jerry Coleman", "Joyce Vasquez", "Jane Bryant", "Sean West", "Deborah Bradley",
  "Phillip Castillo", "Martha Coleman", "Ryan Santos", "Harold Hanson", "Frances Hoffman", "Heather Fisher", "Martha Martin",
  "George Gray", "Rachel Herrera", "Billy Hart", "Kelly Campbell", "Kelly Marshall", "Doris Simmons", "Julie George",
  "Raymond Burke", "Ruth Hart", "Jack Schmidt", "Billy Schmidt", "Ruth Wagner", "Zachary Estrada", "Olivia Griffin", "Ann Hayes",
  "Julia Weaver", "Anna Nelson", "Willie Anderson", "Anna Schneider", "Debra Torres", "Jordan Holmes", "Thomas Dean",
  "Maria Burton", "Terry Long", "Danielle McDonald", "Kyle Flores", "Cheryl Garcia", "Judy Delgado", "Karen Elliott",
  "Vincent Ortiz", "Ann Wright", "Ann Ramos", "Roy Jensen", "Keith Cunningham", "Mary Campbell", "Jesse Ortiz", "Joseph Mendoza",
  "Nathan Bishop", "Lori Valdez", "Tammy Jacobs", "Mary West", "Juan Mitchell", "Thomas Adams", "Christian Martinez", "James Ramos",
  "Deborah Ross", "Eric Holmes", "Thomas Diaz", "Sharon Morales", "Kathryn Hamilton", "Helen Edwards", "Betty Powell",
  "Harry Campbell", "Raymond Perkins", "Melissa Wallace", "Danielle Hicks", "Harold Brewer", "Jack Burns", "Anna Robinson",
  "Dorothy Nguyen", "Jane Dean", "Janice Hunter", "Ryan Moore", "Brian Riley", "Brittany Bradley", "Phillip Ortega", "William Fisher",
  "Jennifer Schultz", "Samantha Perez", "Linda Carr", "Ann Brown", "Shirley Kim", "Jeremy Alvarez", "Dylan Oliver", "Roy Gomez",
  "Ethan Brewer", "Ruth Lucas", "Marilyn Myers", "Danielle Wright", "Jose Meyer", "Bobby Brown", "Angela Crawford", "Brandon Willis",
  "Kyle McDonald", "Aaron Valdez", "Kevin Webb", "Ashley Gordon", "Karen Jenkins", "Johnny Santos", "Ashley Henderson", "Amy Walters",
  "Amber Rodriguez", "Thomas Ross", "Dorothy Wells", "Jennifer Murphy", "Douglas Phillips", "Helen Johnston", "Nathan Hawkins",
  "Roger Mitchell", "Michael Young", "Eugene Cruz", "Kevin Snyder", "Frank Ryan", "Tiffany Peters", "Beverly Garza", "Maria Wright",
  "Shirley Jensen", "Carolyn Munoz", "Kathleen Day", "Ethan Meyer", "Rachel Fields", "Joan Bell", "Ashley Sims", "Sara Fields",
  "Elizabeth Willis", "Ralph Torres", "Charles Lopez", "Aaron Green", "Arthur Hanson", "Betty Snyder", "Jose Romero", "Linda Martinez",
  "Zachary Tran", "Sean Matthews", "Eric Elliott", "Kimberly Welch", "Jason Bennett", "Nicole Patel", "Emily Guzman", "Lori Snyder",
  "Sandra White", "Christina Lawson", "Jacob Campbell", "Ruth Foster", "Mark McDonald", "Carol Williams", "Alice Washington",
  "Brandon Ross", "Judy Burns", "Zachary Hawkins", "Julie Chavez", "Randy Duncan", "Lisa Robinson", "Jacqueline Reynolds", "Paul Weaver",
  "Edward Gilbert", "Deborah Butler", "Frances Fox", "Joshua Schmidt", "Ashley Oliver", "Martha Chavez", "Heather Hudson",
  "Lauren Collins", "Catherine Marshall", "Katherine Wells", "Robert Munoz", "Pamela Nelson", "Dylan Bowman", "Virginia Snyder",
  "Janet Ruiz", "Ralph Burton", "Jose Bryant", "Russell Medina", "Brittany Snyder", "Richard Cruz", "Matthew Jimenez", "Danielle Graham",
  "Steven Guerrero", "Benjamin Matthews", "Janet Mendoza", "Harry Brewer", "Scott Cooper", "Alexander Keller", "Virginia Gordon",
  "Randy Scott", "Kimberly Olson", "Helen Lynch", "Ronald Garcia", "Joseph Willis", "Philip Walker", "Tiffany Harris", "Brittany Weber",
  "Gregory Harris", "Sean Owens", "Wayne Meyer", "Roy McCoy", "Keith Lucas", "Christian Watkins", "Christopher Porter", "Sandra Lopez",
  "Harry Ward", "Julie Sims", "Albert Keller", "Lori Ortiz", "Virginia Henry", "Samuel Green", "Judith Cole", "Ethan Castillo", "Angela Ellis",
  "Amy Reid", "Jason Brewer", "Aaron Clark", "Aaron Elliott", "Doris Herrera", "Howard Castro", "Kenneth Davis", "Austin Spencer",
  "Jonathan Marshall", "Phillip Nelson", "Julia Guzman", "Robert Hansen", "Kevin Anderson", "Gerald Arnold", "Austin Castro", "Zachary Moore",
  "Joseph Cooper", "Barbara Black", "Albert Mendez", "Marie Lane", "Jacob Nichols", "Virginia Marshall", "Aaron Miller", "Linda Harvey",
  "Christopher Morris", "Emma Fields", "Scott Guzman", "Olivia Alexander", "Kelly Garrett", "Jesse Hanson", "Henry Wong", "Billy Vasquez",
  "Larry Ramirez", "Bryan Brooks", "Alan Berry", "Nicole Powell", "Stephen Bowman", "Eric Hughes", "Elizabeth Obrien", "Timothy Ramos",
  "Michelle Russell", "Denise Ruiz", "Sean Carter", "Amanda Barnett", "Kathy Black", "Terry Gutierrez", "John Jensen", "Grace Sanchez",
  "Tiffany Harvey", "Jacqueline Sims", "Wayne Lee", "Roy Foster", "Joyce Hart", "Joseph Russell", "Harold Washington", "Beverly Cox",
  "Nicole Morales", "Anna Carpenter", "Jesse Ray", "Ann Snyder", "Mark Diaz", "Elizabeth Harper", "Andrew Guerrero", "Cheryl Silva",
  "Michelle Hudson", "Jeffrey Santos", "Victoria Vasquez", "Matthew Meyer", "Jacob Murray", "Jose Munoz", "Edward Howell", "Vincent Hunter",
  "Daniel Walters", "Samantha Obrien", "Laura Elliott", "Richard Olson", "Daniel Graham", "Carol Lee", "Grace Sullivan", "Nancy Rodriguez",
  "Tyler Tran", "Crystal Shaw", "Madison Allen", "Ralph Sims", "Joe Jenkins", "Dennis Ray", "Arthur Davidson", "Victoria Allen", "Arthur Jackson",
  "Joan Thomas", "Daniel Hopkins", "Gloria Hicks", "Danielle Price", "Craig Keller", "Alan Morgan", "Gregory Silva", "Samantha Kelly",
  "Rachel Williamson", "Bruce Garrett", "Jacob Smith", "Kathleen Nichols", "Sarah Long", "Carol Pearson", "Virginia Mendez", "Judy Valdez",
  "Jason Garza", "Brenda Fowler", "Karen Edwards", "Alexander Anderson", "Pamela Wallace", "Ruth Howell", "Walter Hernandez", "George Lucas",
  "Samantha Long", "Margaret Garza", "Kathleen Schultz", "Frances Guerrero", "Amber Meyer", "Rachel Morales", "Teresa Curtis", "Heather Bell",
  "Grace Johnson", "Melissa King", "Zachary Cook", "Carol Schultz", "Jane Beck", "Karen Stone", "Roger Brooks", "Carolyn Fuller", "Nicholas Coleman",
  "William Bishop", "Christine May", "Linda George", "Jean Meyer", "Cheryl Armstrong", "Danielle Welch", "Amanda Graham", "Janice Carter",
  "Catherine Brooks", "Lawrence Gonzalez", "Amy Russell", "Eugene Jimenez", "Joseph Carlson", "Peter McCoy", "Jerry Washington", "Carolyn Obrien",
  "Mark Walker", "Stephanie Hoffman", "Julie Pena", "Karen Curtis", "Bryan Cruz", "Madison Shaw", "Rachel Graham", "Susan Simpson", "Andrea Harrison",
  "Bryan Miller", "Vincent McDonald", "Jesse McCoy", "Christine Ramos", "Dorothy Riley", "Karen Warren", "Ashley Weber", "Judith Robinson",
  "Alan Mendez", "Donna Medina", "Helen Lane", "Douglas Clark", "Brenda Romero", "Doris Wells", "Patrick Howell", "Doris Lawrence", "Harry Jacobs",
  "Phillip Rose", "Deborah Patel", "Bryan Day", "Rachel Butler", "Paul Butler", "Judy Knight", "Willie Wallace", "Phillip Anderson", "Emma Black",
  "Lisa Lynch", "Kimberly Freeman", "Ronald West", "Kathleen Harris", "Martha Ruiz", "Phillip Moreno", "Robert Vargas", "Jesse Diaz", "Christine Weber",
  "Karen Stanley", "Theresa Edwards", "Kathryn Chavez", "Sarah Rios", "Danielle Wong", "Kathy Carr", "Joan Diaz", "Albert Walters",
  "Denise Kim", "Katherine Pearson", "Diana Richardson", "Harry Ford", "Eric Mills", "Sean Hicks", "Joe Brown", "Judith Morgan", "Harry Hunter",
  "Matthew Bryant", "Tyler Rose", "Mildred Delgado", "Emma Peters", "Walter Delgado", "Lauren Gilbert", "Christopher Romero"
];

users = users.map(function (fullName) {
  var userName = fullName.replace(/ /g, '').toLowerCase();

  return {
    id: userName,
    name: userName,
    fullName: fullName
  }
});

users = users.filter(function (user) {
  return user.name.indexOf(query.term) === 0
});

success(users)
};

tinymce.init({
selector: 'textarea#full-featured, textarea#full-featured1',
plugins: 'print preview fullpage powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media mediaembed template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount tinymcespellchecker a11ychecker imagetools textpattern help formatpainter permanentpen pageembed tinycomments mentions linkchecker',
toolbar: 'formatselect | bold italic strikethrough forecolor backcolor permanentpen formatpainter | link image media pageembed | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent | removeformat | addcomment',
image_advtab: true,
content_css: [
  '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
  '//www.tiny.cloud/css/codepen.min.css'
],
link_list: [
  { title: 'My page 1', value: 'http://www.tinymce.com' },
  { title: 'My page 2', value: 'http://www.moxiecode.com' }
],
image_list: [
  { title: 'My page 1', value: 'http://www.tinymce.com' },
  { title: 'My page 2', value: 'http://www.moxiecode.com' }
],
image_class_list: [
  { title: 'None', value: '' },
  { title: 'Some class', value: 'class-name' }
],
importcss_append: true,
height: 300,
file_picker_callback: function (callback, value, meta) {
  /* Provide file and text for the link dialog */
  if (meta.filetype === 'file') {
    callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
  }

  /* Provide image and alt text for the image dialog */
  if (meta.filetype === 'image') {
    callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
  }

  /* Provide alternative source and posted for the media dialog */
  if (meta.filetype === 'media') {
    callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
  }
},
templates: [
  { title: 'Some title 1', description: 'Some desc 1', content: 'My content' },
  { title: 'Some title 2', description: 'Some desc 2', content: '<div class="mceTmpl"><span class="cdate">cdate</span><span class="mdate">mdate</span>My content2</div>' }
],
template_cdate_format: '[CDATE: %m/%d/%Y : %H:%M:%S]',
template_mdate_format: '[MDATE: %m/%d/%Y : %H:%M:%S]',
image_caption: true,
spellchecker_dialog: true,
spellchecker_whitelist: ['Ephox', 'Moxiecode'],
tinycomments_mode: 'embedded',
mentions_fetch: mentionsFetchFunction,
content_style: '.mce-annotation { background: #fff0b7; } .tc-active-annotation {background: #ffe168; color: black; }'
});



// tinymce.init({
// selector: 'textarea',
// height: 60,
// theme: 'modern',








// autoresize_bottom_margin: 0,
// image_advtab: true,
// image_caption: true,
// image_list: [
//   {title: 'Dog', value: 'mydog.jpg'},
//   {title: 'Cat', value: 'mycat.gif'}
// ],
// font_formats: 'Aileron=aileron, sans-serif;Helvetica=helvetica, arial;Lato=lato, sans-serif;Lobster=lobster, chicago, serif;Noto Serif=noto serif, serif;Permanent Marker=permanent marker, sans-serif;Raleway=raleway, sans-serif;Roboto=roboto, sans-serif;Source Code Pro=source code pro, monospace',
// templates: [
//   { title: 'Test template 1', content: 'Test 1' },
//   { title: 'Test template 2', content: 'Test 2' }
// ],
// content_style: 'body {margin:25px}',
// content_css: [
//   'https://fonts.googleapis.com/css?family=Lato|Lobster|Noto+Serif|Permanent+Marker|Raleway|Roboto|Source+Code+Pro',
//   '//www.tiny.cloud/css/codepen.min.css'
// ]
//  });

</script>

@yield('js')




<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  dropdownContent.style.outline = "none";
  }
  });
}
</script>