AWS.config.update({
    accessKeyId: 'AKIAIX5VKUESX7ZWVEJA',
    secretAccessKey: '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'
});

AWS.config.region = 'eu-west-1';

function SendSNS(msg, from, result)
{
    var message = "From: "+from+"\n"+"Message:\n"+msg;
    var sns = new AWS.SNS({params: {TopicArn: 'arn:aws:sns:eu-west-1:589434896614:ISECureWebsiteSnsToEmail'}});
    if (result) {
        result.innerHTML = "<b>Sending message..</b>\n";
    }
    sns.publish({
        Message: message,
        Subject: "ISECure WS-Kanava: Contact from "+from
    }, function (err, data) {
        if (!err) {
            console.log('Message published');
            result.innerHTML = "<b>Message sent!";
        } else {
            console.log('Message NOT published');
            console.log(err, err.stack);
            result.innerHTML = "<b>Message NOT sent!";
        }
    });
}
