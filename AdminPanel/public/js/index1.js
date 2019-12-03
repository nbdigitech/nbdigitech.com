/*jshint esversion: 6 */
const db = firebase.firestore();
db.settings({timestampsInSnapshots : true});

    var t = document.querySelector("#newsTbl");
    var homeTbl1 = document.querySelector("#homeTbl1");
    var newsImgDiv = document.querySelector("#newsImgDiv");
    var sample2tabpanel1 = document.querySelector("#sample2-tabpanel1");
    var sample2tabpanel2 = document.querySelector("#sample2-tabpanel2");
    var getingDetails = document.querySelector("#getingDetails");



     function idFunc(title, id){
        var news_Id = document.getElementById("newsId");
        var news_Title = document.getElementById("newsTitle");
        news_Id.value = id;
        news_Title.value = title;
        document.getElementById("newsType").value = "eng";
        document.getElementById("newsForm").submit();
    }
    function idFunc1(title, id){
        //alert(title);
        var news_Id = document.getElementById("newsId");
        var news_Title = document.getElementById("newsTitle");
        news_Id.value = id;
        news_Title.value = title;
        document.getElementById("newsType").value = "hindi";
        document.getElementById("newsForm").submit();
    }


    var newsDescription = document.getElementById("newsDescriptions");
    var d = new Date();
	db.collection("posts").where("approvedEnglish", "==", true).where("approvedHindi", "==", true).orderBy("createdAt", "desc").limit(3).get().then(function(snapshot) {
	    var i = 0;
        snapshot.docs.forEach(function(doc) {
           var News = "{{url('News')}}";

           var id = doc.id;
           var ttlE = doc.data().titleEnglish;
           var ttlEng = ttlE.replace(/['"]+/g, '');
           var tlthindi = doc.data().titleHindi;
           var TtlHindi = doc.data().titleHindi;
           var tlteng = doc.data().titleEnglish;
           var smbl ='"';


           var s = doc.data().createdAt.seconds;
           var utcSeconds = s;
           var d = new Date(0); // The 0 there is the key, which sets the date to the epoch
           d.setUTCSeconds(utcSeconds);
           var dts = smbl+d+smbl;
           //getingDetails.innerHTML += "<m style='display:none'>eee</m> <div class='mbr-col-lg-4 mbr-col-sm-6 mbr-col-md-6'> <amp-img alt='Content Loader'src='"+ doc.doc.data().imageURL +"' width='55' height='30'layout='responsive' style='height:220px;'></amp-img> <div id='engNewsTd"+i+"' style='margin-top:10px;margin-bottom:10px;'> <a href='#' onClick='idFunc("+smbl+ttlEng+smbl+","+smbl+id+smbl+")' id='englishNewsTilte'>"+doc.doc.data().titleEnglish+"...</a><br><br> <p class='newsDescription' style='display:none'>"+ doc.doc.data().summaryEnglish +"</p>   <a href='{{url('CatrgoryNews')}}/"+doc.doc.data().newsLocationEnglish+"' style='padding:5px;background-color:#000000;color:white;font-size:10px;'>"+doc.doc.data().newsLocationEnglish+"</a> &nbsp;&nbsp;<a style='font-size:10px;color:gray;cursor: context-menu;'>"+dts.substr(1, 16)+"</a>      </div>       <div id='hindiNewsTd"+i+"' style='display:none; margin-top:10px;margin-bottom:10px;'> <a href='#' onClick='idFunc1("+smbl+TtlHindi+smbl+","+smbl+id+smbl+")' id='hindiNewsTilte'>"+doc.doc.data().titleHindi+"...</a><br><br> <p class='newsDescription' style='display:none'>"+ doc.doc.data().summaryHindi +"</p>    <a href='LocationWiseNews/"+location+"' style='padding:5px;background-color:#000000;color:white;font-size:10px;'>"+doc.doc.data().newsLocationEnglish+"</a> &nbsp;&nbsp;<a style='font-size:10px;color:gray;cursor: context-menu;'>"+dts.substr(1, 16)+"</a>        </div><!-- <p>"+ doc.doc.data().createdAt +"</p> -->    </div>";
           getingDetails.innerHTML += "<m style='display:none'>eee</m> <div class='mbr-col-lg-4 mbr-col-sm-6 mbr-col-md-6'> <amp-img alt='Content Loader'src='"+ doc.doc.data().imageURL +"' width='55' height='30'layout='responsive' style='height:160px;'></amp-img> <div id='engNewsTd"+i+"' style='margin-top:15px;margin-bottom:40px;' class='zoomIn'> <a href='#' onClick='idFunc("+smbl+ttlEng+smbl+","+smbl+id+smbl+")' id='englishNewsTilte'>"+doc.doc.data().titleEnglish+"...</a><br> <p class='newsDescription' style='display:none'>"+ doc.doc.data().summaryEnglish +"</p> <a href='{{url('LocationWiseNews')}}/"+location+"' style='padding:5px;background-color:#000000;color:white;font-size:10px;'>"+doc.doc.data().newsLocationEnglish+"</a> &nbsp;&nbsp;<a style='font-size:10px;color:gray;cursor: context-menu;'>"+dts.substr(1, 16)+"</a> </div>       <div id='hindiNewsTd"+i+"' style='display:none; margin-top:15px;margin-bottom:40px;' class='zoomIn'> <a href='#' onClick='idFunc1("+smbl+TtlHindi+smbl+","+smbl+id+smbl+")' id='hindiNewsTilte'>"+doc.doc.data().titleHindi+"...</a><br><br> <p class='newsDescription' style='display:none'>"+ doc.doc.data().summaryHindi +"</p>  <a href='{{url('LocationWiseNews')}}/"+location+"' style='padding:5px;background-color:#000000;color:white;font-size:10px;'>"+doc.doc.data().newsLocationEnglish+"</a> &nbsp;&nbsp;<a style='font-size:10px;color:gray;cursor: context-menu;'>"+dts.substr(1, 16)+"</a>   </div><!-- <p>"+ doc.doc.data().createdAt +"</p> -->    </div>";

           //getingDetails.innerHTML += "<m style='display:none'>eee</m><table><tr><td> <amp-img src='"+ doc.data().imageURL +"' width='1' height='1' alt='Background Image' layout='responsive' id='newsImg'> </amp-img> </td><td id='engNewsTd"+i+"'> <div class='mani-col-lg-8 newsTitle'> <a href='#' onClick='idFunc("+smbl+ttlEng+smbl+","+smbl+id+smbl+")'>"+ tlteng.substr(0,60) +"...</a> </div><div class='container newsDescription'>"+ doc.data().summaryEnglish +"</div><div class='container'> <a href='/amp/News' id='btnNews'>News</a>&nbsp;&nbsp;<a style='font-size:13px;color:gray'>"+dts.substr(1, 16)+"</a><!-- <a href='#' id='btnNxt'> <img src='"+ doc.data().imageURL +"' alt='Background Image'> </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='#' id='authorName'>Author Name</a> --><div>  <!--<a id='nesDt'>"+ dts.substr(1, 16) +"</a> &nbsp;&nbsp; <a href='#' id='NewsReadMe'> View More </a> --></div></div></td><td id='hindiNewsTd"+i+"' style='display:none'> <div class='mani-col-lg-8 newsTitle'> <a href='#' onClick='idFunc1("+smbl+TtlHindi+smbl+","+smbl+id+smbl+")'>"+ tlthindi.substr(0,60) +"...</a> </div><div class='container newsDescription'>"+ doc.data().summaryHindi +"</div><div class='container'> <a href='/amp/News' id='btnNews'>News</a> &nbsp;&nbsp;<a style='font-size:13px;color:gray'>"+dts.substr(1, 16)+"</a> <!--<a href='#' id='btnNxt'> <img src='"+ doc.data().imageURL +"' alt='Background Image'> </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='#' id='authorName'>Author Name</a>--> <div id='thediv'> <!--<a id='nesDt'>"+ dts.substr(1, 16) +"</a> &nbsp;&nbsp; <a href='#' id='NewsReadMe'> View More </a>--> </div></div></td></tr></table>";
           console.log(dts.substr(1, 16));

           i++;
         });
	})
	.catch(function(error) {
        console.log("Error getting documents: ", error);
    });



  function call()
       {

        function idFunc(title, id){
        var news_Id = document.getElementById("newsId");
        var news_Title = document.getElementById("newsTitle");
        news_Id.value = id;
        news_Title.value = title;
        document.getElementById("newsType").value = "eng";
        document.getElementById("newsForm").submit();
    }
    function idFunc1(title, id){
        //alert(title);
        var news_Id = document.getElementById("newsId");
        var news_Title = document.getElementById("newsTitle");
        news_Id.value = id;
        news_Title.value = title;
        document.getElementById("newsType").value = "hindi";
        document.getElementById("newsForm").submit();
    }


                var sportsTable = document.querySelector("#sportsTable");
                var first = db.collection("posts").where("category", "array-contains", "Sports").limit(3);
                return first.onSnapshot(function (documentSnapshots) {
                     var i = 0;
                     documentSnapshots.docs.forEach(function(doc) {

                           var id = doc.id;
                           var ttlE = doc.data().titleEnglish;
                           var ttlEng = ttlE.replace(/['"]+/g, '');

                           var tlthindi = doc.data().titleHindi;
                           var TtlHindi = doc.data().titleHindi;

                           var tlteng = doc.data().titleEnglish;

                           var smbl ='"';


                     sportsTable.innerHTML += "<m style='display:none'>ss</m><tr> <td> <div class='container'> <amp-img src='"+doc.data().imageURL+"' style='width:120px; height:100px;' width='1' height='1' alt='Background Image' layout='responsive'> </amp-img> </div></td>     <td> <div class='' id='sportsEnglishTd"+i+"'><a  onClick='idFunc("+smbl+ttlEng+smbl+","+smbl+id+smbl+")'> "+doc.data().titleEnglish+" </a> </div> </td>  <td> <div class='' id='sportsHindiTd"+i+"' style='display:none;'><a href='#' onClick='idFunc1("+smbl+TtlHindi+smbl+","+smbl+id+smbl+")'> "+doc.data().titleHindi+" </a></div> </td>  </tr> <br>";
                    // console.log(doc.data().category);

                    i++;
                      });

                  });
       }
       call();

    function call1()
    {
        function idFunc(title, id){
        var news_Id = document.getElementById("newsId");
        var news_Title = document.getElementById("newsTitle");
        news_Id.value = id;
        news_Title.value = title;
        document.getElementById("newsType").value = "eng";
        document.getElementById("newsForm").submit();
    }
    function idFunc1(title, id){
        //alert(title);
        var news_Id = document.getElementById("newsId");
        var news_Title = document.getElementById("newsTitle");
        news_Id.value = id;
        news_Title.value = title;
        document.getElementById("newsType").value = "hindi";
        document.getElementById("newsForm").submit();
    }

                var moviesDive = document.querySelector("#moviesDive");
                var first = db.collection("posts").where("category", "array-contains", "Bollywood & Entertainment").limit(3);
                return first.onSnapshot(function (documentSnapshots) {
                     var i = 0;
                     documentSnapshots.docs.forEach(function(doc) {

                          var id = doc.id;
                           var ttlE = doc.data().titleEnglish;
                           var ttlEng = ttlE.replace(/['"]+/g, '');

                           var tlthindi = doc.data().titleHindi;
                           var TtlHindi = doc.data().titleHindi;

                           var tlteng = doc.data().titleEnglish;

                           var smbl ='"';

                             var smry = doc.data().summaryEnglish;
                             var summary= smry.substr(0, smry.indexOf('.'));
                             var smryHindi = doc.data().summaryHindi;
                             var summaryHindi =  smryHindi.substr(0, smryHindi.indexOf('।'));

                             moviesDive.innerHTML += "<m style='display:none'>ss</m><div class='mbr-col-lg-4 mbr-col-sm-6 mbr-col-md-6'> <amp-img src='"+doc.data().imageURL+"' width='210' height='150' alt='Background Image' layout='responsive' id='moviesIMG'> </amp-img> <div class='blogContent' id='movieenglis_div"+i+"'> <!--<span style='border-bottom:1px solid blue;font-size:12px;'>"+doc.data().createdAt+"</span>--> <a  onClick='idFunc("+smbl+ttlEng+smbl+","+smbl+id+smbl+")'>"+doc.data().titleEnglish+"</a> <p> "+summary+". </p></div>     <div class='blogContent' id='moviehindi_div"+i+"' style='display:none'> <!--<span style='border-bottom:1px solid blue;font-size:12px;'>"+doc.data().createdAt+"</span>--> <a href='#' onClick='idFunc1("+smbl+TtlHindi+smbl+","+smbl+id+smbl+")'>"+doc.data().titleHindi+"</a> <p> "+summaryHindi+".| </p></div>        </div>";
                             console.log(doc.data().summaryHindi);
                            i++;
                     });

                  });
       }
       call1();




