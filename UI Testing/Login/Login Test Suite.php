<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type" />
	<title>Login Test Suite</title>
</head>
<body>
<table cellpadding="1" cellspacing="1" border="1">
<thead>
<tr><td rowspan="1" colspan="3">Untitled Test Case</td></tr>
</thead>
<tbody>
<tr><td>open</td><td>http://127.0.0.1/<datalist><option>http://127.0.0.1/</option></datalist></td><td></td>
</tr>
<tr><td>click</td><td>id=loginButton<datalist><option>id=loginButton</option><option>//button[@id='loginButton']</option><option>//button[3]</option><option>css=#loginButton</option></datalist></td><td></td>
</tr>
<tr><td>click</td><td>name=username<datalist><option>name=username</option><option>//input[@name='username']</option><option>//form[@id='loginForm']/div/div/section/div/div/div/center/div[2]/input</option><option>//div[2]/input</option><option>css=input[name="username"]</option></datalist></td><td></td>
</tr>
<tr><td>type</td><td>name=username<datalist><option>name=username</option><option>//input[@name='username']</option><option>//form[@id='loginForm']/div/div/section/div/div/div/center/div[2]/input</option><option>//div[2]/input</option><option>css=input[name="username"]</option></datalist></td><td>MyName</td>
</tr>
<tr><td>type</td><td>name=password<datalist><option>name=password</option><option>//input[@name='password']</option><option>//form[@id='loginForm']/div/div/section/div/div/div/center/div[3]/input</option><option>//div[3]/input</option><option>css=input[name="password"]</option></datalist></td><td>test123</td>
</tr>
<tr><td>click</td><td>//form[@id='loginForm']/div/div/section/div/div/div/center/div[4]<datalist><option>//form[@id='loginForm']/div/div/section/div/div/div/center/div[4]</option><option>//center/div[4]</option></datalist></td><td></td>
</tr>
<tr><td>click</td><td>//input[@id='loginButton']<datalist><option>//input[@id='loginButton']</option><option>//form[@id='loginForm']/div/div/section/div/div/div/center/div[4]/input</option><option>//div[4]/input</option><option>css=div.form-group &gt; #loginButton</option></datalist></td><td></td>
</tr>
<tr><td>click</td><td>//img[@alt='Person name']<datalist><option>//img[@alt='Person name']</option><option>//span/img</option><option>css=img[alt="Person name"]</option></datalist></td><td></td>
</tr>
<tr><td>click</td><td>xpath=(//img[@alt='Smiley face'])[2]<datalist><option>xpath=(//img[@alt='Smiley face'])[2]</option><option>//button[@id='logout']/img</option><option>//button/img</option><option>css=#logout &gt; img[alt="Smiley face"]</option></datalist></td><td></td>
</tr>
</tbody></table>
</body>
</html>