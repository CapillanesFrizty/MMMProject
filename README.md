````diff
!!!DO NOT DELETE THIS!!!

@@GUIDLINES:@@

!ALL HTML FILE IS STORE IN THE PUBLIC FOLDER
!ALL CSS FILE IS STORE IN THE PUBLIC FOLDER
!ALL JS AND PHP IS STORE IN THE SRC FOLDER
!Please use comments (hangyo nako na para dili ta mag lisod❤️) <!--for the html--> and /*for the css*/
!Use meaningful terms in class and Id, make sure that is it related to the element
@@NOTE: bahalag taas ang term na gi gamit basta puhon puhon dili ta mag lisod og subay@@
!(copy&paste ra ang Class and Id para dili kapoy type)🤣🤣

! -> description, message or a caption
+ -> good practice
- -> bad practice

!Element refers to <p>this is a sample text</p>
!tag refers to <p> as opening tag and </p> as the closing tag

Team Members
Male: James Autor, June Rian Bation, John Fritz Capillanes
Female: Mercy Grace Estano


!Project Description: 

!With the intention of upgrading the current manual system into a web-based system, we are proposing Mighty-Mite Motor’s sales system that aims to aid effective and efficient management of vehicle sales. Mighty-Mite Motor’s sales system fully automates the purchasing, sales, order accounting, and customer care functions. The initiative to create a new system that is web-based will help the company to boost customer service delivery and profit. Business information can be stored and managed efficiently and in a more organized manner. 


@@ DOCUMENTATIONS:@@

!For css ideas you go here https://www.w3schools.com/howto/default.asp

+:root -> the :root selector matches the document's root element. In HTML, the root element is always the html element and the html element refers to <html></html>.

+var() -> The var() function is used to insert the value of a CSS variable.

@@ Syntax: @@

+:root {
-  css declarations; ❌❌
or 
+  --name:value; ✅✅
}

-var(--name, value)❌❌
or
+var(--name) <- use this when we do css declaration in root✅✅

@@ How to use: @@
Ex.
+body{color: var(--name-of-the-property)} -> please dont be confuse its just a 1 line css 🫣🫣 ✅✅ 

!PS: if a css is declared in the :root{} it is globaly declared, it means that you can access a css declaration in any css file

!Task:

!March 31, 2023 to April 2, 2023 -> login page (UI UX only)
!April 3 2023 to April 6 2023 -> Admin pages, i.e., adding of products, add of products form and get orders (UI UX only)
!April 7 2023 to April 9 2023 -> backend of Admin Pages, Basic create, read, insert, Delete Functionalities