<?php

namespace app\controllers;

use Yii;
class ReportController extends \yii\web\Controller
{
    public function actionIndex()
    {
        // return $this->render('index');
        // $link = Yii::$app->urlManager->createAbsoluteUrl(['/forum/q/view', 'id' => 1]);
        //         Yii::$app->mailer->compose()
        //             ->setFrom([\Yii::$app->params['supportEmail'] => \Yii::$app->name . ''])
        //             ->setTo(Yii::$app->user->identity->email)
        //             ->setSubject('คำถามของคุณที่ ' . \Yii::$app->name)
        //             ->setTextBody('หัวข้อ  ติดตามคำถามของคุณได้ที่ : '.$link) //เลือกอยางใดอย่างหนึ่ง
        //             ->setHtmlBody('หัวข้อ  ติดตามคำถามของคุณได้ที่ : '.$link) //เลือกอยางใดอย่างหนึ่ง
        //             ->send();
        // Yii::$app->mailer->compose('html',[
        //     'fullname'=>'สาธิต สีถาพล'
        // ])
        // ->setFrom(['patjawat@gmail.com'=>'Khon Kaen Hospital'])
        // ->setTo('patjsr@kku.ac.th')
        // ->setSubject('ยินดีต้อนรับสู่งานประชุมวิชาการโรงพยาบาลขอนแก่น 2558')
        // ->send();
        // Yii::$app->mailer->compose(['html' => 'signupConfirm-html', 'text' => 'signupConfirm-text'], ['user' => 'patjawat']) //สามารพเลือกเฉพาะ html หรือ text ในการส่ง
        // ->setFrom([\Yii::$app->params['senderEmail'] => \Yii::$app->name . ''])
        // ->setTo('patjsr@kku.ac.th')
        // ->setSubject('ยืนยันผู้ใช้งาน ' . \Yii::$app->name)
        // ->send();
        // $link = Yii::$app->urlManager->createAbsoluteUrl(['/forum/q/view', 'id' => '1']);
        //         Yii::$app->mailer->compose()
        //             ->setFrom([\Yii::$app->params['senderEmail'] => \Yii::$app->name . ''])
        //             ->setTo('patjsr@gmail.com')
        //             ->setSubject('คำถามของคุณที่ ' . \Yii::$app->name)
        //             ->setTextBody('หัวข้อ  ติดตามคำถามของคุณได้ที่ : '.$link) //เลือกอยางใดอย่างหนึ่ง
        //             ->setHtmlBody('หัวข้อ  ติดตามคำถามของคุณได้ที่ : '.$link) //เลือกอยางใดอย่างหนึ่ง
        //             ->send();
        //             return $link;
        return Yii::$app
            ->mailer
            ->compose(
                // ['html' => 'passwordResetToken-html', 'text' => 'passwordResetToken-text'],
                ['user' => '1']
            )
           // ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
           // ->setTo($this->email)
            ->setFrom(['patjawat@gmail.com'=>'เนเธฃเธเธเธขเธฒเธเธฒเธฅเธเธฃเน€เธเธฃเธดเธ'])
                ->setTo('patjsr@kku.ac.th')
                // ->setTo($this->email)
            ->setSubject('Password reset for ' . Yii::$app->name)            
            ->send();

    //      return   Yii::$app->mailer->compose()
    // ->setFrom('patjawat@gmail.com')
    // ->setTo('patjsr@kku.ac.th')
    // ->setSubject('Message subject')
    // ->setTextBody('Plain text content')
    // ->setHtmlBody('<b>HTML content</b>')
    // ->send();
    }


}



