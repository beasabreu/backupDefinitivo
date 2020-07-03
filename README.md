Trabalho de Fundamentos de Sistemas de Informação
===================================================

Website desenvolvido para a disciplina Fundamentos de Sistemas de Informação (ACH2014) <br>
Prof. Luciano Araújo, 2020 - 1º Semestre <br><br>

Link do Site : http://swytrabalho.byethost18.com/web/ <br>
<font size="-7"> Histórico de Commits : https://github.com/swy-326/web3.0, https://github.com/swy-326/wptheme_fsi </font> <br><br>

Sungwon Yoon 9822261


Introdução
------------------------------------------
Para informar sobre vestib <br><br>
### Vídeo de apresentação
[![IMAGE ALT TEXT HERE](http://img.youtube.com/vi/-XXod_Bd8VQ/0.jpg)](http://www.youtube.com/watch?v=-XXod_Bd8VQ)



Estrutura básica do site
---------------------------------------------
![Estrutura básisca](https://github.com/swy-326/backupDefinitivo/raw/master/readme_img/structure.png)

#### #skip
Acessibilidade, Skip Navigation <br>

#### #header_1 
Header principal do site <br>

#### #header_2
Header secundário em que indica o que contém no #nav_1 e #nav_2  <br>
Quando o width do site se torna menor que 600, esconde div é escondido <br>

#### #nav_1
Menu onde se dispõe das opções da qual deseja obter informação <br>
Com width da tela < 600, este nav não é mostrado. <br>

#### #nav_2 
Contém hyperlinks do .cont-cont <br>

#### #contents
Parte onde se mostra a informação da opção selecionada <br>
.cont-title : Nome completo da Universidade / Enem <br>
.cont-cont : Todos as informações  <br>

#### #footer
Footer <br>


Recursos / Open-Source utilizados
------------------------------------------------
- Fonte <br>
https://fonts.google.com/specimen/Noto+Sans+JP <br>
https://google-webfonts-helper.herokuapp.com/fonts  <p>

- Calendário <br>
https://codepen.io/nijin39/pen/JbQBXM <p>

- Barra de Rolagem <br>
Modificado de https://codepen.io/devstreak/pen/dMYgeO  <p>

- Icon <br>
https://thenounproject.com/term/book-and-pencil/3271225 <p>
  
- Google Calendar <br>
```
https://calendar.google.com/calendar/r/eventedit?
    text=Inscrição+ENEM
    &dates=20200703T193000Z/20201231T223000Z
    &details=Hoje+começam+as+inscrições+de+ENEM
```
<br>


Bugs não resolvidos
----------------------------------
- Google Calendar <p>
  - A cookie associated with a cross-site resource at http://google.com/ was set without the `SameSite` attribute. A future release of Microsoft Edge will only deliver cookies with cross-site requests if they are set with `SameSite=None` and `Secure`. You can review cookies in developer tools under Application>Storage>Cookies and see more details at https://www.chromestatus.com/feature/5088147346030592 and https://www.chromestatus.com/feature/5633521622188032.<br>
  - Tracking Prevention blocked access to storage for \<URL\>. <br>
  - Refused to display 'https://www.google.com/?gws_rd=ssl' in a frame because it set 'X-Frame-Options' to 'sameorigin' <br>
