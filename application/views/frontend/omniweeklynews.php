<!-- <?php require(APPPATH . 'views/frontend/header.php'); ?>
<style>
    .dw-banner-bcg-img {
        min-height: 250px;
        display: flex;
    }

    #preloader {
        position: fixed;
        bottom: -100%;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: end;
        align-items: flex-end;
        z-index: 9999;
        transition: bottom 0.5s ease-in-out;
    }

    .preloader-inner {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        background: linear-gradient(to bottom, #30cfd0 0%, #330867 100%);
        position: relative;
        margin: 10px 30px 30px 0px;
        animation: preloader-spin 2s linear infinite;
    }

    .preloader-circle {
        width: 70px;
        height: 70px;
        background-color: white;
        border-radius: 50%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    @keyframes preloader-spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }
</style>

<div id="preloader">
    <div class="preloader-inner">
        <div class="preloader-circle"></div>
    </div>
</div>



<div class="container-fluid p-0 overflow-hidden">
    <section class="position-relative w-100 h-auto pb-2 mb-2 mx-auto overflow-hidden" style="z-index: 0 ;">
        <div class="">
            <div class="dw-banner-bcg-img">
                <img src="http://localhost/omnicore/assets/images/Omnicore-new-logo-4.svg" width="400px" style="display:block;margin: 0 auto;" alt="">
            </div>
            <div class="w-100 position-absolute" style="top:-4px;z-index: -1;background-color: #dbd3f7;max-height: 128px;min-height: 128px;">
            </div>
        </div>
    </section>



    <section>
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mt-3">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="icofont-home"></i></a></li>
                    <li class="breadcrumb-item active" id="btbreadcrumbactiveurllast" aria-current="page">Weekly news</li>
                </ol>
            </nav>
        </div>
    </section>

    <section>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="">
                    <h1 class="fs-32"></h1>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </section>
</div>
 -->

<div class="row" id="media-area">
    <div class="col-md-3">
        <div class="img-thumbnail" style="position: relative;">
            <div class="main-thumbnail" onclick="closeifm('meetinG.png')" style="cursor: pointer;">
                <img src="https://eninrac.com/assets/upload/meetinG.png" alt="meetinG" style="width: 100%;height: 10rem;">
            </div>
            <div class="footer-thumbnail" style="overflow-x: hidden;">
                <input type="text" disabled="" value="meetinG.png" style="margin:5px 0;width: 100%;">
                <a href="javascript:void(0)" class="btn btn-block btn-xs btn-danger waves-effect waves-light" onclick="deleteimage(7176)">Delete</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="img-thumbnail" style="position: relative;">
            <div class="main-thumbnail" onclick="closeifm('EV-Adaptablity-Gujarat-06.png')" style="cursor: pointer;">
                <img src="https://eninrac.com/assets/upload/EV-Adaptablity-Gujarat-06.png" alt="EV-Adaptablity-Gujarat-06" style="width: 100%;height: 10rem;">
            </div>
            <div class="footer-thumbnail" style="overflow-x: hidden;">
                <input type="text" disabled="" value="EV-Adaptablity-Gujarat-06.png" style="margin:5px 0;width: 100%;">
                <a href="javascript:void(0)" class="btn btn-block btn-xs btn-danger waves-effect waves-light" onclick="deleteimage(7174)">Delete</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="img-thumbnail" style="position: relative;">
            <div class="main-thumbnail" onclick="closeifm('EV-Adaptablity-Gujarat-05.png')" style="cursor: pointer;">
                <img src="https://eninrac.com/assets/upload/EV-Adaptablity-Gujarat-05.png" alt="EV-Adaptablity-Gujarat-05" style="width: 100%;height: 10rem;">
            </div>
            <div class="footer-thumbnail" style="overflow-x: hidden;">
                <input type="text" disabled="" value="EV-Adaptablity-Gujarat-05.png" style="margin:5px 0;width: 100%;">
                <a href="javascript:void(0)" class="btn btn-block btn-xs btn-danger waves-effect waves-light" onclick="deleteimage(7173)">Delete</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="img-thumbnail" style="position: relative;">
            <div class="main-thumbnail" onclick="closeifm('EV-Adaptablity-Gujarat-04.png')" style="cursor: pointer;">
                <img src="https://eninrac.com/assets/upload/EV-Adaptablity-Gujarat-04.png" alt="EV-Adaptablity-Gujarat-04" style="width: 100%;height: 10rem;">
            </div>
            <div class="footer-thumbnail" style="overflow-x: hidden;">
                <input type="text" disabled="" value="EV-Adaptablity-Gujarat-04.png" style="margin:5px 0;width: 100%;">
                <a href="javascript:void(0)" class="btn btn-block btn-xs btn-danger waves-effect waves-light" onclick="deleteimage(7172)">Delete</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="img-thumbnail" style="position: relative;">
            <div class="main-thumbnail" onclick="closeifm('EV-Adaptablity-Gujarat-03.png')" style="cursor: pointer;">
                <img src="https://eninrac.com/assets/upload/EV-Adaptablity-Gujarat-03.png" alt="EV-Adaptablity-Gujarat-03" style="width: 100%;height: 10rem;">
            </div>
            <div class="footer-thumbnail" style="overflow-x: hidden;">
                <input type="text" disabled="" value="EV-Adaptablity-Gujarat-03.png" style="margin:5px 0;width: 100%;">
                <a href="javascript:void(0)" class="btn btn-block btn-xs btn-danger waves-effect waves-light" onclick="deleteimage(7171)">Delete</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="img-thumbnail" style="position: relative;">
            <div class="main-thumbnail" onclick="closeifm('EV-Adaptablity-Gujarat-02.png')" style="cursor: pointer;">
                <img src="https://eninrac.com/assets/upload/EV-Adaptablity-Gujarat-02.png" alt="EV-Adaptablity-Gujarat-02" style="width: 100%;height: 10rem;">
            </div>
            <div class="footer-thumbnail" style="overflow-x: hidden;">
                <input type="text" disabled="" value="EV-Adaptablity-Gujarat-02.png" style="margin:5px 0;width: 100%;">
                <a href="javascript:void(0)" class="btn btn-block btn-xs btn-danger waves-effect waves-light" onclick="deleteimage(7170)">Delete</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="img-thumbnail" style="position: relative;">
            <div class="main-thumbnail" onclick="closeifm('EV-Adaptablity-Gujarat-01.jpg')" style="cursor: pointer;">
                <img src="https://eninrac.com/assets/upload/EV-Adaptablity-Gujarat-01.jpg" alt="EV-Adaptablity-Gujarat-01" style="width: 100%;height: 10rem;">
            </div>
            <div class="footer-thumbnail" style="overflow-x: hidden;">
                <input type="text" disabled="" value="EV-Adaptablity-Gujarat-01.jpg" style="margin:5px 0;width: 100%;">
                <a href="javascript:void(0)" class="btn btn-block btn-xs btn-danger waves-effect waves-light" onclick="deleteimage(7169)">Delete</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="img-thumbnail" style="position: relative;">
            <div class="main-thumbnail" onclick="closeifm('Electric_Vehicle_Adaptablity_in_Gujarat-_A_Snapshot.pdf')" style="cursor: pointer;">
                <img src="https://eninrac.com/assets/images/pdf.png" alt="Electric_Vehicle_Adaptablity_in_Gujarat-_A_Snapshot" style="width: 100%;height: 10rem;">
            </div>
            <div class="footer-thumbnail" style="overflow-x: hidden;">
                <input type="text" disabled="" value="Electric_Vehicle_Adaptablity_in_Gujarat-_A_Snapshot.pdf" style="margin:5px 0;width: 100%;">
                <a href="javascript:void(0)" class="btn btn-block btn-xs btn-danger waves-effect waves-light" onclick="deleteimage(7167)">Delete</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="img-thumbnail" style="position: relative;">
            <div class="main-thumbnail" onclick="closeifm('Solar_Rooftop_Generation_Status_in_India.pdf')" style="cursor: pointer;">
                <img src="https://eninrac.com/assets/images/pdf.png" alt="Solar_Rooftop_Generation_Status_in_India" style="width: 100%;height: 10rem;">
            </div>
            <div class="footer-thumbnail" style="overflow-x: hidden;">
                <input type="text" disabled="" value="Solar_Rooftop_Generation_Status_in_India.pdf" style="margin:5px 0;width: 100%;">
                <a href="javascript:void(0)" class="btn btn-block btn-xs btn-danger waves-effect waves-light" onclick="deleteimage(7165)">Delete</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="img-thumbnail" style="position: relative;">
            <div class="main-thumbnail" onclick="closeifm('Solar-Rooftop-Generation-05.png')" style="cursor: pointer;">
                <img src="https://eninrac.com/assets/upload/Solar-Rooftop-Generation-05.png" alt="Solar-Rooftop-Generation-05" style="width: 100%;height: 10rem;">
            </div>
            <div class="footer-thumbnail" style="overflow-x: hidden;">
                <input type="text" disabled="" value="Solar-Rooftop-Generation-05.png" style="margin:5px 0;width: 100%;">
                <a href="javascript:void(0)" class="btn btn-block btn-xs btn-danger waves-effect waves-light" onclick="deleteimage(7164)">Delete</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="img-thumbnail" style="position: relative;">
            <div class="main-thumbnail" onclick="closeifm('Solar-Rooftop-Generation-04.png')" style="cursor: pointer;">
                <img src="https://eninrac.com/assets/upload/Solar-Rooftop-Generation-04.png" alt="Solar-Rooftop-Generation-04" style="width: 100%;height: 10rem;">
            </div>
            <div class="footer-thumbnail" style="overflow-x: hidden;">
                <input type="text" disabled="" value="Solar-Rooftop-Generation-04.png" style="margin:5px 0;width: 100%;">
                <a href="javascript:void(0)" class="btn btn-block btn-xs btn-danger waves-effect waves-light" onclick="deleteimage(7163)">Delete</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="img-thumbnail" style="position: relative;">
            <div class="main-thumbnail" onclick="closeifm('Solar-Rooftop-Generation-03.png')" style="cursor: pointer;">
                <img src="https://eninrac.com/assets/upload/Solar-Rooftop-Generation-03.png" alt="Solar-Rooftop-Generation-03" style="width: 100%;height: 10rem;">
            </div>
            <div class="footer-thumbnail" style="overflow-x: hidden;">
                <input type="text" disabled="" value="Solar-Rooftop-Generation-03.png" style="margin:5px 0;width: 100%;">
                <a href="javascript:void(0)" class="btn btn-block btn-xs btn-danger waves-effect waves-light" onclick="deleteimage(7162)">Delete</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="img-thumbnail" style="position: relative;">
            <div class="main-thumbnail" onclick="closeifm('Solar-Rooftop-Generation-02.png')" style="cursor: pointer;">
                <img src="https://eninrac.com/assets/upload/Solar-Rooftop-Generation-02.png" alt="Solar-Rooftop-Generation-02" style="width: 100%;height: 10rem;">
            </div>
            <div class="footer-thumbnail" style="overflow-x: hidden;">
                <input type="text" disabled="" value="Solar-Rooftop-Generation-02.png" style="margin:5px 0;width: 100%;">
                <a href="javascript:void(0)" class="btn btn-block btn-xs btn-danger waves-effect waves-light" onclick="deleteimage(7161)">Delete</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="img-thumbnail" style="position: relative;">
            <div class="main-thumbnail" onclick="closeifm('Solar-Rooftop-Generation-01.jpg')" style="cursor: pointer;">
                <img src="https://eninrac.com/assets/upload/Solar-Rooftop-Generation-01.jpg" alt="Solar-Rooftop-Generation-01" style="width: 100%;height: 10rem;">
            </div>
            <div class="footer-thumbnail" style="overflow-x: hidden;">
                <input type="text" disabled="" value="Solar-Rooftop-Generation-01.jpg" style="margin:5px 0;width: 100%;">
                <a href="javascript:void(0)" class="btn btn-block btn-xs btn-danger waves-effect waves-light" onclick="deleteimage(7160)">Delete</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="img-thumbnail" style="position: relative;">
            <div class="main-thumbnail" onclick="closeifm('omnicore_7.jpg')" style="cursor: pointer;">
                <img src="https://eninrac.com/assets/upload/omnicore_7.jpg" alt="omnicore_7" style="width: 100%;height: 10rem;">
            </div>
            <div class="footer-thumbnail" style="overflow-x: hidden;">
                <input type="text" disabled="" value="omnicore_7.jpg" style="margin:5px 0;width: 100%;">
                <a href="javascript:void(0)" class="btn btn-block btn-xs btn-danger waves-effect waves-light" onclick="deleteimage(7158)">Delete</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="img-thumbnail" style="position: relative;">
            <div class="main-thumbnail" onclick="closeifm('omnicore____9.jpg')" style="cursor: pointer;">
                <img src="https://eninrac.com/assets/upload/omnicore____9.jpg" alt="omnicore____9" style="width: 100%;height: 10rem;">
            </div>
            <div class="footer-thumbnail" style="overflow-x: hidden;">
                <input type="text" disabled="" value="omnicore____9.jpg" style="margin:5px 0;width: 100%;">
                <a href="javascript:void(0)" class="btn btn-block btn-xs btn-danger waves-effect waves-light" onclick="deleteimage(7156)">Delete</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="img-thumbnail" style="position: relative;">
            <div class="main-thumbnail" onclick="closeifm('electric_omnicore5.jpg')" style="cursor: pointer;">
                <img src="https://eninrac.com/assets/upload/electric_omnicore5.jpg" alt="electric_omnicore5" style="width: 100%;height: 10rem;">
            </div>
            <div class="footer-thumbnail" style="overflow-x: hidden;">
                <input type="text" disabled="" value="electric_omnicore5.jpg" style="margin:5px 0;width: 100%;">
                <a href="javascript:void(0)" class="btn btn-block btn-xs btn-danger waves-effect waves-light" onclick="deleteimage(7154)">Delete</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="img-thumbnail" style="position: relative;">
            <div class="main-thumbnail" onclick="closeifm('high_electrcity_omnicore12.jpeg')" style="cursor: pointer;">
                <img src="https://eninrac.com/assets/upload/high_electrcity_omnicore12.jpeg" alt="high_electrcity_omnicore12" style="width: 100%;height: 10rem;">
            </div>
            <div class="footer-thumbnail" style="overflow-x: hidden;">
                <input type="text" disabled="" value="high_electrcity_omnicore12.jpeg" style="margin:5px 0;width: 100%;">
                <a href="javascript:void(0)" class="btn btn-block btn-xs btn-danger waves-effect waves-light" onclick="deleteimage(7152)">Delete</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="img-thumbnail" style="position: relative;">
            <div class="main-thumbnail" onclick="closeifm('UPERC8.jpg')" style="cursor: pointer;">
                <img src="https://eninrac.com/assets/upload/UPERC8.jpg" alt="UPERC8" style="width: 100%;height: 10rem;">
            </div>
            <div class="footer-thumbnail" style="overflow-x: hidden;">
                <input type="text" disabled="" value="UPERC8.jpg" style="margin:5px 0;width: 100%;">
                <a href="javascript:void(0)" class="btn btn-block btn-xs btn-danger waves-effect waves-light" onclick="deleteimage(7150)">Delete</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="img-thumbnail" style="position: relative;">
            <div class="main-thumbnail" onclick="closeifm('Redressal_of_Consumer7.jpg')" style="cursor: pointer;">
                <img src="https://eninrac.com/assets/upload/Redressal_of_Consumer7.jpg" alt="Redressal_of_Consumer7" style="width: 100%;height: 10rem;">
            </div>
            <div class="footer-thumbnail" style="overflow-x: hidden;">
                <input type="text" disabled="" value="Redressal_of_Consumer7.jpg" style="margin:5px 0;width: 100%;">
                <a href="javascript:void(0)" class="btn btn-block btn-xs btn-danger waves-effect waves-light" onclick="deleteimage(7149)">Delete</a>
            </div>
        </div>
    </div>
</div>

<script>
    let imageArr = [];
    document.querySelectorAll(".main-thumbnail img").forEach(item => {
        let tempSrc = item.getAttribute("src")
        imageArr.push(tempSrc)
    })
    console.log(imageArr)
</script>