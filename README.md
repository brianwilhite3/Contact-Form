Contact-Form
============

Contact form using JQuery validation and Bootstrap 3 inside CodeIgniter. 

This application has two pages. The form is displayed by the template class in the libraries folder. Front validation checks user input in regular expressions and will prompt a success result if true. This form uses CodeIgniters form validation, database, and email libraries. The controller calls the record class in the constructor. If both validations are successful the user's input will be stored and an email will be sent.

php.ini in XAMPP
Gmail settings:

SMTP=smtp.gmail.com
smtp_port=587
sendmail_from=your email
sendmail_path="\"c\xampp\sendmail\sendmail.exe\"-t"

sendmail.exe settings:

smtp_server=smtp.gmail.com
smtp_port=587
auth_username=your email
auth_password=your password




