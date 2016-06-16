<head>
<link rel="SHORTCUT ICON" href="themes/Sugar5/images/sugar_icon.ico?v=8C9FWd3mQpqvK5e_csJcmQ">
<meta charset="UTF-8">
<title>Оценка</title>
</head>
<script src="custom/modules/Scores/raty/vendor/jquery.js"></script>
<script src="custom/modules/Scores/raty/lib/jquery.raty.js"></script>
<link rel="stylesheet" href="custom/modules/Scores/raty/lib/jquery.raty.css">
<style>
    {literal}
        #title {
            font-size: 23px;
            margin-top: 50px;
            margin-bottom: 30px;
        }
        #formSend {
            margin: auto;
            width: 503px;
        }
        #formSend td {
            display: block;
            font-size: 20px;
            padding: 20px;
        }
        #comment {
            width: 300px;
            height: 100px;
        }
        #button-confirm {
            width: 100px;
            height: 30px;
            margin-top: 30px;
            float: right;
        }

    {/literal}
</style>



<body>
<div id="header">
    <div id="companyLogo">
        <a href="index.php?module=Home&action=index" border="0">
            <img src="themes/default/images/company_logo.png?v=8C9FWd3mQpqvK5e_csJcmQ&logo_md5=1d2df0902a895af3e05dbc7c4e6758eb" width="141" height="15" alt="Логотип" border="0"/>
        </a>
    </div>    
    <div id="globalLinks"></div>
</div>
    <form id="SendMailScores" name="SendMailScores" method="POST" action='index.php?entryPoint=SendMailScores&id={$id}&key={$key}'>
    <div id='formSend'>
        <div id = "title" name = "title">
            <b>Пожалуйста, поставьте Вашу оценку</b>
        </div>
        <table id = "tableForm" name = "tableForm" cellspacing=0 cellpadding=0 border=0>
            <tr>
                <td>
                    Оценка: <font color="red">*</font>
                </td>
                <td>
                <div id = "scores" name = "scores"></div>
                </td>      
            </tr>
            <tr>
                <td>
                    Комментарий:
                </td>
                <td>
                    <textarea id = "comment" name = "comment"></textarea>
                </td>
            </tr>
        </table>
        <button id = "button-confirm" name = "button-confirm" value = "Save">Отправить</button>
    </div>
    </form>
</body>
{literal}
<script>
    $('#scores').raty({
        number: 10,
        starOff  : 'custom/modules/Scores/raty/lib/images/star-off.png',
        starOn   : 'custom/modules/Scores/raty/lib/images/star-on.png'
    });
</script>
{/literal}