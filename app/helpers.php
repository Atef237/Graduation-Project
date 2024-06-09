<?php

function getPaymentStatus($payment){
    $methods = ['visa'=>"فيزا - دفع إليكتروني",'bank'=>'تحويل بنكى','paypal'=>'باي بال','zbony'=>'زبونى','sala'=>'متجر سلة'];
    return $methods[$payment];
}

function success_toast(){
    return   toast(__('all.success_process_msg'), 'success');
}
function register_success_toast(){
    return   toast('تمت عمليةالتسجيل بنجاح برجاء تسجيل الدخول لتفعيل الحساب', 'success');
}
function login_success_toast(){
    return   toast('تم تسجيل الدخول بنجاح', 'success');
}
function verfication_request_toast(){
    return   toast('تمإرسال كود التفعيل لبريدك الإليكتروني بجاء تفعيل الحساب', 'success');
}
function wrong_pass(){
    return   toast('كلمة المرور القديمة غير صحيحة', 'error');
}
function wrong_login(){
    return   toast('بيانات الدخول غير صحيحة', 'error');
}
function not_active_login(){
    return   toast('لقد تم إيقافك من الإدارة', 'error');
}
function wrong_code(){
    return   toast('الكود الذي ادخلته غير صحيح', 'error');
}
function please_login(){
    return   toast('يجب تسجيل الدخول اولا', 'warning');
}
function custom_error_toast($message){
    return   toast($message, 'error');
}
function success_subscription(){
    return   toast('تم الاشتراك بنجاح بنجاح', 'success');
}
function success_deposit_uploaded(){
    return   toast('تم رفع البينات بنجاح سوف يتم مراجعتها من المسؤال', 'success');
}
function fail_subscription(){
    return   toast('لم يتم الاشتراك في الجمعية برجاء الموافقه علي الشروط والاحكام اولا', 'error');
}
function getPaymentStatusAdmin($status){
    $statuses = ['pending'=>'معلق','accepted'=>'تم الموافقة','refused'=>'مرفوض'];
    return $statuses[$status];

}
 function m_pdf($dir='rtl')
{
    $mpdf= new \Mpdf\Mpdf([
        'mode' =>'utf-8'
    ]);
    $mpdf->autoScriptToLang =true;
    $mpdf->autoLangToFont =true;
    $mpdf->showImageErrors =true;
    $mpdf->pdf_version ='1.5';
    $mpdf->setDirectionality ($dir);
    return $mpdf;
}

