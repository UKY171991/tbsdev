<% 
Response.Buffer = True
Dim strBody


u_name=trim(request.form("name"))
u_phone=trim(request.form("phone"))
u_email=trim(request.form("email"))
u_query=trim(request.form("query"))

br=request.servervariables("http_user_agent")
lan=request.servervariables("http_accept_language")
senderip=request.servervariables("remote_addr")


strBody = "<b>Name: </b>" & u_name
strBody = strBody & "<br><br><b>Phone: </b>" & u_phone
strBody = strBody & "<br><br><b>Email: </b>" & u_email
strBody = strBody & "<br><br><b>Comments/Questions: </b>" & u_query
strBody = strBody & "<br><br><b>Sender's Computer Info: </b>" & br & " / " & lan & " / " & senderip



sch = "http://schemas.microsoft.com/cdo/configuration/" 
 
    Set cdoConfig = CreateObject("CDO.Configuration") 
 
    With cdoConfig.Fields 
        .Item(sch & "sendusing") = 2 ' cdoSendUsingPort 
        .Item(sch & "smtpserver") = "smtp8.net4india.com" 
        .update 
    End With 
 
    Set cdoMessage = CreateObject("CDO.Message") 
 
    With cdoMessage 
        Set .Configuration = cdoConfig 

        .From = "rajgarhfarms@gmail.com" 
        .To = "rajgarhfarms@gmail.com"



        .Subject = "Query received through website rajgarhfarms.com" 
        .HTMLBody = strBody
        .Send 
    End With 




' Clean up the server object
  set cdoConfig = nothing



response.redirect("confirm.htm")

  %>