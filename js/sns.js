AWS.config.update({
    accessKeyId: 'AKIAIX5VKUESX7ZWVEJA',
    secretAccessKey: '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'
});

AWS.config.region = 'eu-west-1';

function SendSNS(msg, name, email, result, thankyou)
{
    msg = msg.trim()
    name = name.trim()
    email = email.trim()
    thankyou = thankyou.trim()
    
    if (msg === '' || name === '' || email === '') {
        if (result) result.innerHTML = "<b>Anna nimi, s&auml;hk&ouml;posti ja viesti.</b>";
        return;
    }
    
    var sns = new AWS.SNS({params: {TopicArn: 'arn:aws:sns:eu-west-1:589434896614:ISECureWebsiteSnsToEmail'}});
    if (result) result.innerHTML = "<b>L&auml;hetet&auml;&auml;n viesti&auml;..</b>\n";
    sns.publish({
        Message: "From: "+name+" <"+email+">\n"+"Message:\n"+msg,
        Subject: "ISECure WS-Kanava contact: "+name+" <"+email+">"
    }, function (err, data) {
        if (!err) {
            if (result) result.innerHTML = "<b>Viesti l&auml;hetetty!</b>";
            window.location = thankyou;
        } else {
            console.log(err, err.stack);
            if (result) result.innerHTML = "<b>Viesti&auml; ei voitu l&auml;hett&auml;&auml;!</b>";
        }
    });
}
