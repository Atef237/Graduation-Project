<footer>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <img src="{{asset('webAssets/images/logo-light.png')}}" alt=""  style="width: 70%;"/>

            </div>
            <div class="col-md-4">
                <h3>روابط هامه</h3>

                <ul class="links">
                    <li class="mb-3"><a href="index.html">الرئيسية</a></li>
                    <li class="mb-3"><a href="">عن الجمعية</a></li>
                    <li class="mb-3"><a href="">مشاريع الجمعية</a></li>

                </ul>
            </div>
            <div class="col-md-4">
                <h3>القائمة البريديه</h3>
                <p>ادخل بريدك الالكترونى ليصلك منا احدث الاخبار والمستجدات</p>
                <div class="input-group bg-white rounded ">
                    <input type="email"  placeholder="البريد الألكتروني" class="form-control border-0 bg-transparent"/>

                    <span class="input-group-text border-0 bg-transparent" id="basic-addon1">

                  <button class="btn btn-info">تسجيل</button>
                </span>

                </div>
            </div>
        </div>


        <div>
        </div>
    </div>


</footer>




<div class="sub-footer">
    <div class="footer-raw">
        <p>
            <i class="fa-regular fa-copyright"></i> جميع الحقوق محفوظة لجمعية البر
            2024
        </p>
        <div class="social-media">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-youtube"></i>
            <i class="fa-brands fa-instagram"></i>
        </div>
    </div>
</div>


<!-- start our scripts  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@yield('modules')
