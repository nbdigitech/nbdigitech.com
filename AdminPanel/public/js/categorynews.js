/*jshint esversion: 6 */
const db = firebase.firestore();
db.settings({timestampsInSnapshots : true});

    var t = document.querySelector("#newsTbl");
    var homeTbl1 = document.querySelector("#homeTbl1");

    var sample2tabpanel1 = document.querySelector("#sample2-tabpanel1");
    var sample2tabpanel2 = document.querySelector("#sample2-tabpanel2");

    var getingDetails = document.querySelector("#getingDetails");
    var loaderImg = document.querySelector("#loaderImg");


    function idFunc(title, id){
        var news_Id = document.getElementById("newsId");
        var news_Title = document.getElementById("newsTitle");
        news_Id.value = id;
        news_Title.value = title;
        document.getElementById("newsType").value = "eng";
        document.getElementById("newsForm").submit();
    }
    function idFunc1(title, id){
        var news_Id = document.getElementById("newsId");
        var news_Title = document.getElementById("newsTitle");
        news_Id.value = id;
        news_Title.value = title;
        document.getElementById("newsType").value = "hindi";
        document.getElementById("newsForm").submit();
    }


    var newsDescription = document.getElementById("newsDescriptions");
    var d = new Date();


  function call()
       {
           var categorynews = document.getElementById("categorynews").value;
           var num = 1;
           var first = db.collection("posts").where("category", "array-contains", categorynews).where("approvedEnglish", "==", true).where("approvedHindi", "==", true).orderBy("createdAt", "desc").limit(39).get().then(function (querySnapshot) {
              var i = 0;
              var getOptions = {
    source: 'cache'
};
              querySnapshot.docChanges().forEach(function(doc) {
                var id = doc.doc.id;
                var ttlE = doc.doc.data().titleEnglish;
                var ttlEng = ttlE.replace(/['"]+/g, '');
                var TtlHindi = doc.doc.data().titleHindi;
                var smbl ='"';

                var tlthindi = doc.doc.data().titleHindi;
                var tlteng = doc.doc.data().titleEnglish;

                var s = doc.doc.data().createdAt.seconds;
                var utcSeconds = s;
                var d = new Date(0); // The 0 there is the key, which sets the date to the epoch
                d.setUTCSeconds(utcSeconds);
                var dts = smbl+d+smbl;
                var location = doc.doc.data().newsLocationEnglish;

                //getingDetails.innerHTML += "<m style='display:none'>eee</m><table><tr>  <td> <amp-img src='"+ doc.doc.data().imageURL +"' height='10' width='1' alt='Background Image' layout='responsive' id='newsImg'> </amp-img> </td><td id='engNewsTd"+i+"'> <div class='mani-col-lg-8 newsTitle'> <a href='#' onClick='idFunc("+smbl+ttlEng+smbl+","+smbl+id+smbl+")'>"+tlteng.substr(0,50)+"...</a> </div><div class='container newsDescription'>"+ doc.doc.data().summaryEnglish +"</div><div class='container'> <!--<a href='#' id='btnNews'>News</a> <a href='#' id='btnNxt'> <img src='"+ doc.doc.data().imageURL +"' height='1' width='1' alt='Background Image'> </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='#' id='authorName'>Author Name</a>--> <div> <a id='nesDt'>"+ doc.doc.data().publishTime +"</a> &nbsp;&nbsp;<!--<a href='#' id='NewsReadMe'> View More </a>--> </div></div></td><td id='hindiNewsTd"+i+"' style='display:none'> <div class='mani-col-lg-8 newsTitle'> <a href='#' onClick='idFunc1("+smbl+TtlHindi+smbl+","+smbl+id+smbl+")'>"+tlthindi.substr(0,50)+"...</a> </div><div class='container newsDescription'>"+ doc.doc.data().summaryHindi +"</div><div class='container'> <a href='#' id='btnNews'>News</a> <a href='#' id='btnNxt'> <img src='"+ doc.doc.data().imageURL +"' height='1' width='1' alt='Background Image'> </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='#' id='authorName'>Author Name</a> <div> <a id='nesDt'>"+ doc.doc.data().publishTime +"</a> &nbsp;&nbsp; <a href='#' id='NewsReadMe'> View More </a> </div></div></td></tr></table>";
                getingDetails.innerHTML += "<m style='display:none'>eee</m> <div class='mbr-col-lg-4 mbr-col-sm-6 mbr-col-md-6'> <amp-img alt='Content Loader'src='"+ doc.doc.data().imageURL +"' width='55' height='30'layout='responsive' style='height:160px;'></amp-img> <div id='engNewsTd"+i+"' style='margin-top:15px;margin-bottom:40px;'> <a href='#' onClick='idFunc("+smbl+ttlEng+smbl+","+smbl+id+smbl+")' id='englishNewsTilte'>"+doc.doc.data().titleEnglish+"...</a><br> <p class='newsDescription' style='display:none'>"+ doc.doc.data().summaryEnglish +"</p> <a href='LocationWiseNews/"+location+"' style='padding:5px;background-color:#000000;color:white;font-size:10px;'>"+doc.doc.data().newsLocationEnglish+"</a> &nbsp;&nbsp;<a style='font-size:10px;color:gray;cursor: context-menu;'>"+dts.substr(1, 16)+"</a> </div>       <div id='hindiNewsTd"+i+"' style='display:none; margin-top:15px;margin-bottom:40px;'> <a href='#' onClick='idFunc1("+smbl+TtlHindi+smbl+","+smbl+id+smbl+")' id='hindiNewsTilte'>"+doc.doc.data().titleHindi+"...</a><br><br> <p class='newsDescription' style='display:none'>"+ doc.doc.data().summaryHindi +"</p>  <a style='padding:5px;background-color:#fdb417;font-size:10px;cursor: context-menu;'>Lokusnews</a> &nbsp;&nbsp;<a style='font-size:10px;color:gray;cursor: context-menu;'>"+dts.substr(1, 16)+"</a>   </div><!-- <p>"+ doc.doc.data().createdAt +"</p> -->    </div>";
                 i++;
              });

                  //console.log("last", lastVisible);
                  var lastVisible = querySnapshot.docs[querySnapshot.docs.length-1];
                      window.addEventListener('scroll', ()=>{
                          const scrollable = document.documentElement.scrollHeight - window.innerHeight;

                          const scrolled = window.scrollY;
                          if(Math.ceil(scrolled) === scrollable){


                              var next = db.collection("posts").where("category", "array-contains", categorynews).where("approvedEnglish", "==", true).where("approvedHindi", "==", true).orderBy("createdAt", "desc").startAfter(lastVisible).limit(3).onSnapshot(function (snapshots) {


                                  var getOptions = {
    source: 'cache'
};
                                  snapshots.docChanges().forEach(function(doc) {
                                   var id = doc.doc.id;
                                    var ttlE = doc.doc.data().titleEnglish;
                                    var ttlEng = ttlE.replace(/['"]+/g, '');
                                    var TtlHindi = doc.doc.data().titleHindi;
                                    var smbl ='"';

                                    var tlthindi = doc.doc.data().titleHindi;
                                    var tlteng = doc.doc.data().titleEnglish;
                                    var s = doc.doc.data().createdAt.seconds;
                                    var utcSeconds = s;
                                    var d = new Date(0); // The 0 there is the key, which sets the date to the epoch
                                    d.setUTCSeconds(utcSeconds);
                                    var dts = smbl+d+smbl;
                                    var location = doc.doc.data().newsLocationEnglish;

                                   // getingDetails.innerHTML += "<m style='display:none'>eee</m><table><tr>  <td> <amp-img src='"+ doc.doc.data().imageURL +"' height='10' width='1' alt='Background Image' layout='responsive' id='newsImg'> </amp-img> </td><td id='engNewsTd"+i+"'> <div class='mani-col-lg-8 newsTitle'> <a href='#' onClick='idFunc("+smbl+ttlEng+smbl+","+smbl+id+smbl+")'>"+tlteng.substr(0,50)+"...</a> </div><div class='container newsDescription'>"+ doc.doc.data().summaryEnglish +"</div><div class='container'> <!--<a href='#' id='btnNews'>News</a> <a href='#' id='btnNxt'> <img src='"+ doc.doc.data().imageURL +"' height='1' width='1' alt='Background Image'> </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='#' id='authorName'>Author Name</a>--> <div> <a id='nesDt'>"+ doc.doc.data().publishTime +"</a> &nbsp;&nbsp;<!--<a href='#' id='NewsReadMe'> View More </a>--> </div></div></td><td id='hindiNewsTd"+i+"' style='display:none'> <div class='mani-col-lg-8 newsTitle'> <a href='#' onClick='idFunc1("+smbl+TtlHindi+smbl+","+smbl+id+smbl+")'>"+tlthindi.substr(0,50)+"...</a> </div><div class='container newsDescription'>"+ doc.doc.data().summaryHindi +"</div><div class='container'> <a href='#' id='btnNews'>News</a> <a href='#' id='btnNxt'> <img src='"+ doc.doc.data().imageURL +"' height='1' width='1' alt='Background Image'> </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='#' id='authorName'>Author Name</a> <div> <a id='nesDt'>"+ doc.doc.data().publishTime +"</a> &nbsp;&nbsp; <a href='#' id='NewsReadMe'> View More </a> </div></div></td></tr></table>";
                                   getingDetails.innerHTML += "<m style='display:none'>eee</m> <div class='mbr-col-lg-4 mbr-col-sm-6 mbr-col-md-6'> <amp-img alt='Content Loader'src='"+ doc.doc.data().imageURL +"' width='55' height='30'layout='responsive' style='height:160px;'></amp-img> <div id='engNewsTd"+i+"' style='margin-top:15px;margin-bottom:40px;'> <a href='#' onClick='idFunc("+smbl+ttlEng+smbl+","+smbl+id+smbl+")' id='englishNewsTilte'>"+doc.doc.data().titleEnglish+"...</a><br> <p class='newsDescription' style='display:none'>"+ doc.doc.data().summaryEnglish +"</p> <a href='LocationWiseNews/"+location+"' style='padding:5px;background-color:#000000;color:white;font-size:10px;'>"+doc.doc.data().newsLocationEnglish+"</a> &nbsp;&nbsp;<a style='font-size:10px;color:gray;cursor: context-menu;'>"+dts.substr(1, 16)+"</a> </div>       <div id='hindiNewsTd"+i+"' style='display:none; margin-top:15px;margin-bottom:40px;'> <a href='#' onClick='idFunc1("+smbl+TtlHindi+smbl+","+smbl+id+smbl+")' id='hindiNewsTilte'>"+doc.doc.data().titleHindi+"...</a><br><br> <p class='newsDescription' style='display:none'>"+ doc.doc.data().summaryHindi +"</p>  <a style='padding:5px;background-color:#fdb417;font-size:10px;cursor: context-menu;'>Lokusnews</a> &nbsp;&nbsp;<a style='font-size:10px;color:gray;cursor: context-menu;'>"+dts.substr(1, 16)+"</a>   </div><!-- <p>"+ doc.doc.data().createdAt +"</p> -->    </div>";

                                    console.log(doc.doc.data().titleHindi);

                                     lastVisible = snapshots.docs[snapshots.docs.length-1];

                                     i++;

                                  });

                               });

                          }
                      });

           })
           .catch(function(error) {
                console.log("Error getting documents: ", error);
            });
       }

       call();

