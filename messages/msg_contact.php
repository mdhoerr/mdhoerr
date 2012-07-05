<h1>Contact Me</h1>
<h2>Contact Information</h2>
<h3>Contact <?php echo($message->messageid);?>: <?php echo($message->lname);?> [<?php 
echo($bodytitle);?>]</h3>

<form id ="edit_message" action="msg_message.php" method="post">

        <ul>
<li><input type="hidden" name="messageid" id="messageid" value="<?php echo($message->messageid);?>" />
        <span class="fieldname"> Last name:</span>  
        <span class="fieldvalue"> <?php echo(db2html($message->lname));?> </span>
        <span class="fieldinput"> 
                <input name="messagelname" id="messagelname" class="messages" 
                type="text" size="35" 
                value="<?php echo(stripslashes($message->lname));?>" /> 
        </span> 
</li>
<li>
        <span class="fieldname"> First name:</span>  
        <span class="fieldvalue"> <?php echo(db2html($message->fname));?> </span>
        <span class="fieldinput"> 
                <input name="messagefname" id="messagefname" class="messages" 
                type="text" size="35" 
                value="<?php echo(stripslashes($message->fname));?>" /> 
        </span> 
</li>
<li>
        <span class="fieldname"> Country:</span>  
        <span class="fieldvalue"> <?php echo(db2html($message->country));?> </span>
        <span class="fieldinput"> 
                <input name="messagecountry" id="messagecountry" class="messages" 
                type="text" size="35" 
                value="<?php echo(stripslashes($message->country));?>" /> 
        </span> 
</li>
<li>
        <span class="fieldname"> email:</span>  
        <span class="fieldvalue"> <?php echo(db2html($message->email));?> </span>
        <span class="fieldinput"> 
                <input name="messageemail" id="messageemail" class="messages" 
                type="text" size="35" 
                value="<?php echo(stripslashes($message->email));?>" /> 
        </span> 
</li>
<li>
        <span class="fieldname"> Created:</span>  
        <span class="fieldvalue"> <?php echo(db2html($message->created));?> </span>
        <span class="fieldinput"> 
                <input name="messagecreated" id="messagecreated" class="messages" 
                type="text" size="35" 
                value="<?php echo(stripslashes($message->created));?>" /> 
        </span> 
</li>
<li>
        <span class="fieldname"> Updated:</span>  
        <span class="fieldvalue"> <?php echo(db2html($message->updated));?> </span>
        <span class="fieldinput"> 
                <input name="messageupdated" id="messageupdated" class="messages" 
                type="text" size="35" 
                value="<?php echo(stripslashes($message->updated));?>" /> 
        </span> 
</li>
<li>
        <span class="fieldname"> Message: </span>
        <span class="fieldvalue"> <?php echo(db2html($message->message));?> &nbsp;</span>
        <span class="fieldinput"> 
                <textarea name="message" class="messages" cols="40" rows="10"><?php 
echo(stripslashes($message->message));?></textarea>
        </span>
</li>
<li>
        <span class="fieldname"> Internal use only - please leave blank:</span>  
        <span class="fieldvalue"> <?php echo(db2html($message->honeypot));?> </span>
        <span class="fieldinput"> 
                <input name="honeypot" id="honeypot" class="messages" 
                type="text" size="35" 
                value="<?php echo(stripslashes($message->honeypot));?>" /> 
        </span> 
</li>
        </ul>
<div class="insert_button"> <input id="insert_message" name="action" type="submit" 
value="add" /> </div> 
<div class="update_button"> <input id="update_message" name="action" type="submit" 
value="modify" /> </div> 
</form>
  <p>
    <a href="http://validator.w3.org/check?uri=referer"><img
        src="http://www.w3.org/Icons/valid-xhtml10-blue"
        alt="Valid XHTML 1.0 Strict" height="31" width="88" /></a>
  </p>
</body>
</html>