const nodemailer = require("nodemailer");


var transporter = nodemailer.createTransport((
	service: "gmail",
	auth:(
		user:"hemanthkrish99@gmail.com"
		pass:"8147hEm@nTh"
		)
	));
var mailOptions = {
	from:"hemanthkrish99@gmail.com",
	to:"1ms17ec033@gmail.com",
	subject:"test"
	text:"this is  mail from me"
};

transporter.sendMail(mailOptions,fuction(err,info){
	if(err){
		console.log(err);
	}
	else{
		console.log('Email sent:' + info.response);
	}
})
