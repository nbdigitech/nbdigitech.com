/*jshint esversion: 6 */
const dba = firebase.firestore();
dba.settings({timestampsInSnapshots : true});

    var sideBarTable = document.querySelector("#sideBarTable");
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


  function callsidebar()
       {

           var num = 1;
           var first = dba.collection("posts").where("category", "array-contains", "Chhattisgarh").where("approvedEnglish", "==", true).where("approvedHindi", "==", true).orderBy("createdAt", "desc").limit(6).get().then(function (querySnapshot) {
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

                //getingDetails.innerHTML += "<m style='display:none'>eee</m><table><tr>  <td> <amp-img src='"+ doc.doc.data().imageURL +"' height='10' width='1' alt='Background Image' layout='responsive' id='newsImg'> </amp-img> </td><td id='engNewsTd"+i+"'> <div class='mani-col-lg-8 newsTitle'> <a href='#' onClick='idFunc("+smbl+ttlEng+smbl+","+smbl+id+smbl+")'>"+tlteng.substr(0,50)+"...</a> </div>      /LocationWiseNews/"+location+"          <div class='container newsDescription'>"+ doc.doc.data().summaryEnglish +"</div><div class='container'> <!--<a href='#' id='btnNews'>News</a> <a href='#' id='btnNxt'> <img src='"+ doc.doc.data().imageURL +"' height='1' width='1' alt='Background Image'> </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='#' id='authorName'>Author Name</a>--> <div> <a id='nesDt'>"+ doc.doc.data().publishTime +"</a> &nbsp;&nbsp;<!--<a href='#' id='NewsReadMe'> View More </a>--> </div></div></td><td id='hindiNewsTd"+i+"' style='display:none'> <div class='mani-col-lg-8 newsTitle'> <a href='#' onClick='idFunc1("+smbl+TtlHindi+smbl+","+smbl+id+smbl+")'>"+tlthindi.substr(0,50)+"...</a> </div><div class='container newsDescription'>"+ doc.doc.data().summaryHindi +"</div><div class='container'> <a href='#' id='btnNews'>News</a> <a href='#' id='btnNxt'> <img src='"+ doc.doc.data().imageURL +"' height='1' width='1' alt='Background Image'> </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='#' id='authorName'>Author Name</a> <div> <a id='nesDt'>"+ doc.doc.data().publishTime +"</a> &nbsp;&nbsp; <a href='#' id='NewsReadMe'> View More </a> </div></div></td></tr></table>";
                sideBarTable.innerHTML += "<tr> <td> <div class='container'> <amp-img src='"+doc.doc.data().imageURL+"' style='width:120px; height:70px;margin-bottom:10px;' width='1' height='1' alt='Background Image' layout='responsive'> </amp-img> </div></td><td> <div style='margin-right:10px;'><a onClick='idFunc("+smbl+ttlEng+smbl+","+smbl+id+smbl+")' class='sideDivBarAnchor'>"+doc.doc.data().titleEnglish+"</a> <a href='#' style='padding:5px;background-color:#000000;color:white;font-size:10px;'>"+doc.doc.data().newsLocationEnglish+"</a> </div></td></tr>";
                i++;
              });
           })
           .catch(function(error) {
                console.log("Error getting documents: ", error);
            });
       }

       callsidebar();

