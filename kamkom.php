<?php
$a = array(
	"สิ่งสำคัญที่สุดคือ เราต้องเชื่อว่าเราทำได้",
	"ผมรู้ว่าผมไม่รู้อะไร",
	"ความสำเร็จมีขั้นตอนอย่าใจร้อน",
	"อินเทรนด์สำหรับผมคือเอาท์",
	"จะประสบความสำเร็จ ไม่จำเป็นต้องเป็นผู้นำเสนอ",

	"แมงมุมชักใยขึงตาข่ายหมายเหยื่อ มนุษย์สร้างเงื่อนไข ชักใยรัดตัวเอง",
	"ชีวิตจะดีหรือร้าย เราทำได้แค่รับรู้",
	"คนที่ไม่เคยผิดพลาด คือคนที่ไม่เคยทำอะไรเลย",
	"ชีวิตเป็นของเรา เราสามารถแก้ไขมันได้",
	"อยู่คนเดียวเปลี่ยวกายแต่ไม่สนุก อยู่คู่แสนทุกข์ แสนสนุก แต่ไม่สบาย",
	"คนที่ไม่รู้จักโง่ในบางโอกาศ ไม่ใช่คนฉลาดที่แท้จริง",
	"คนเก่งมีมาก แต่คนหายากคือคนดี",	
	"ความเก่งทุกคนมี แต่ความดีทุกคนเฉย"	,
	"คำพูดสำคัญ แต่การกระทำสำคัญกว่า"	,
	"ความรู้เหมือนชุดชั้นใน มีไว้ใส่ไม่ได้มีไว้โชว์"	,
	"มองคนอื่นค้นหาความดี มองตัวเรานี้ค้นหาจข้อผิดพลาด"	,
	"ดอกไม้บานได้หุบได้ แต่มิตรภาพหุบแล้วบานยาก"	,
	"คนเราดูไม่โง่ ถ้าไม่เริ่มเปิดปากพูด"	,
	"ดีชั่วอยู่ที่ตัวทำ สูงต่ำอยู่ที่ทำตัว"	,
	"สีสรร จินตนาการ ลายเส้น สร้างสรรค์บนผ้าใบ เพียงให้ใครๆมองผ่านเพียงแวบเดียว"	,
	"ไม่ว่าจะพยายามขัดถูสักเท่าไหร่ แต่คาบเลือด และน้ำตาก็ไม่อาจลบเลือนออกไปได้หรอก",
	"ในชีวิตนี้ไม่มีอะไรที่เราทำไมได้ มีเพียงแค่ว่าจะทำหรือไม่ทำ",	
	"มิตรภาพงอกเงยได้ด้วยความจริงใจ",
	"อย่าร้อนรนกับคำเสแสร้ง หากยังไม่เคยได้ยินถ้อยคำจริงใจ"	,
	"ถ้อยคำเลวร้ายเพียงไม่กี่คำ อาจทำลายความรู้สึกดีๆ แม้จะมีคำพูดที่แสนวิเศษ...."
	);
$random_key = array_rand($a,1);
echo "<p>" . $a[$random_key] . "</p>";