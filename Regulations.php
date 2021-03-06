<?php 
include_once 'Controller/ErrorSettings.php';
include ('Controller/Auth.php');
?>
<!DOCTYPE html>
<html lang="zh">
<head>
  <title>法規條文</title>
 
  <link rel="stylesheet" type="text/css" href="css/htmleaf-demo.css">
 
</head>

<?php
 include('common/head.php');
  include('common/navigation.php');
?>
   <link rel="stylesheet" type="text/css" href="css/law.css">
   <link rel="stylesheet" type="text/css" href="css/one.css">

<body>
  
  <div id="wrapper">
        <div class="overlay"></div>
    
   

        <!-- Page Content -->
        <div id="page-content-wrapper">
     
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h1 class="page-header">租屋 - 法規條文</h1>  
                        <p class="lead">法規條文來源: <a href="http://www.osa.ncut.edu.tw/2004/html/office/rent/law.asp" target="_blank">勤益科大校外租屋網</a> 
                        <h3>一、定訂契約：</h3>
                        <p></p>
                        <blockquote>1. 訂約時應先確定訂約者之身分，即房東是否為房屋所有權人或有權出租者，可請對方出示身分證或駕照等證明身分之文件及房屋所有權狀或房屋稅單，以確定是屋主本人。</blockquote>
                        <blockquote>2. 若立契約書人中有一方為未成年人，最好取得法定代理人之同意，以免因事後法定代理人不同意而產生困擾。但如事實足以認定，租屋是該未成年人日常生活所必需（例如求學中的學生），縱使未得法定代理人同意，租約仍然有效。</blockquote>
                        <blockquote>3. 此處出租人及承租人、連帶保證人名稱記載，一定要與契約書最後的簽名處記載一致，以免發生爭議。</blockquote>
                        <blockquote>4. 訂約時請務必詳細審閱契約條文，由雙方簽名、蓋章或按手印，並寫明戶籍地址及身份證號碼，以免日後求償無門。</blockquote>
                        <blockquote>5. 契約書內容中若有更改處，雙方要加蓋印章或共同簽名，以防止未來發生糾紛情事。</blockquote>
                        <blockquote>6. 簽約完畢，雙方應各執一份完整的契約書正本留存，如有數位承租人，則可與出租人依人數分別訂立數份契約，亦或每位承租人於租賃契約書承租人處簽名，以保障自身權益；所謂正本係指凡簽名蓋章處應為用印簽名之原件正本，而不得以影本代替。遷入後並應自我要求尊重契約內容，並進而積極維持房東與房客間良好之租賃關係。</blockquote>

                         <h3>二、二房東：</h3>
                        <p></p>
                        <blockquote>1. 若是向二房東租屋，需注意大房東是否反對轉租，如果大房東與二房東的契約中有反對轉租的約定，則將來大房東終止與二房東的租約時，房客的權益會受到損失。</blockquote>
                        <blockquote>2. 依民法四四三條規定，當屋主是二房東時將房屋予以全部轉租給其他房客時，是無效的，因此僅能部份轉租才存在有效的租賃關係。</blockquote>
                        <blockquote>3. 當房客為尋找分租室友，而欲擔任二房東角色時，應先取得房東同意，經確定可以轉租後，方可與房客簽約，訂約後房客只需對二房東負責。屆時如果房客有違背契約之情形時，則全權由二房東對大房東負責。二房東在轉租或讓與租賃權時都應該通知大房東，若因為疏於告知義務而導致大房東的房子有任何損害，二房東必須負擔所有的責任與賠償。</blockquote>
                        <blockquote>4. 一般坊間的契約書中，如訂有「未經房東同意，不得私自將租賃房屋之全部或一部出借、轉租、頂讓或其他變相方法由他人使用房屋」之規定時，可爭取加註「留宿親人，不在此限」。</blockquote>

                        <h3>三、租賃標的所在地、使用範圍及使用目的：</h3>
                        <p></p>
                        <blockquote>1. 如有意願承租該棟房屋時，另應注意房屋是否為合法建物或是違建物。為慎重起見，房客可以記下門牌號碼，並向屋主探詢地號與房屋建號即可至當地地政事務所申請該建物的登記簿謄本。從登記簿謄本可以看出誰是所有權人，有無遭法院查封 .... 等各種情況。不動產登記簿是公開的，任何第三人都可以申請調閱。（但如為三、四十年以上的房子，有可能是未登記建物，但不算是違章建築。）</blockquote>
                        <blockquote>2. 確定房屋出租的範圍，是否僅供住家或可供營業用；或是否附家具使用等均應詳予約定，因為此會涉及到房東應交付給房客的房屋狀態，以及未來租賃關係終止時，房客應返還如何狀態的房屋及有關設備。</blockquote>
                        <blockquote>3. 交屋時可拍照存證租屋狀況，以供返還租屋回復原狀之參考。如租屋附有家具，應以列清單註明為宜。</blockquote>

                        <h3>四、租賃期間：</h3>
                        <p></p>
                        <blockquote>1. 租約如未到期，而房屋被轉賣或被法院拍賣時，依民法四二五條之規定：<br>
                        (1) 如租約未經法院公證，且為不定期限租賃或超過五年之長期定期租賃契約，租約對新屋主並不繼續存在，新房東有權解除租約。 <br>(2) 如租約為未經法院公證之五年以內定期租約，並不影響房客權益，房客仍可繼續向新屋主承租至租約屆滿。</blockquote>
                        <blockquote>2. 如覺得房屋狀況令人滿意時，可向房東爭取租屋期滿後的優先承租權，事先在契約中加訂「租約期滿，原房客有優先承租權」之條文，並可事先協調漲價幅度及時間。</blockquote>


                        <h3>租金及押租金：</h3>
                        <p></p>
                        <blockquote>1. 依土地法第九十七條第一項之規定，房屋租金不能超過土地及其房屋申報總額年息的百分之十。即將房屋及土地申報總值除 10 再除 12 ，就等於每月租金的上限，超過部分房客可以不付，也可以請求當地縣市政府強制降低租金。但如果雙方同意約定的租金超過土地法最高限額時，不算違法。（土地部分，任何人均可向地政機關取得公告地價資料；房屋部分亦可向稅捐機關取得房屋現值的資料）。</blockquote>
                        <blockquote>2. 另依土地法第九十九條之規定，押租金不得超過二個月房屋租金之總額，超過部份，承租人得以超過之部分抵付房租。</blockquote>
                        <blockquote>3. 有訂期限之租賃契約，房東不得單獨調漲租金，如果房東片面提出調漲租金時，房客可以予以拒絕。
</blockquote>
                        <blockquote>4. 如因天災事變，或房東怠於修繕租賃物等非因房客之事由致使租賃物一部分或全部不能使用時，房客可依租賃物不能使用之部分請求減免租金或終止租賃契約而請求損害賠償。</blockquote>
                        <blockquote>5. 在交付押金、訂金或租金時，房客都應要求房東開付收據或在房客持有的租賃契約書中簽收註明收訖事宜（後附參考表二），當然房東在返還押金或訂金於房客時，也應該要求房客簽寫收據或在房東持有的租賃契約書上記明收訖事宜。</blockquote>
                       
                    
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
        <br>
    </div>
  
</body>
</html>

<!-- Footer -->
<?php
  include('common/footer.php');
?>
