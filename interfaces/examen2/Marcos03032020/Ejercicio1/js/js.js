/*
@author Marcos Martinez
@version EXAMEN 3 de marzo 2020
*/
var canvas = document.getElementById("canvas");
var canvas2 = canvas.getContext("2d");
canvas2.strokeStyle = "black";
canvas2.lineWidth = 2;
/*persona 1*/
canvas2.beginPath();
canvas2.arc(100, 100, 20, 0, 2 * Math.PI, false);
canvas2.fill();
canvas2.stroke();

canvas2.beginPath();
canvas2.moveTo(100, 100);
canvas2.lineTo(100, 250);
canvas2.stroke();

canvas2.beginPath();
canvas2.moveTo(100, 150);
canvas2.lineTo(75, 200);
canvas2.stroke();

canvas2.beginPath();
canvas2.moveTo(100, 150);
canvas2.lineTo(125, 200);
canvas2.stroke();

canvas2.beginPath();
canvas2.moveTo(100, 250);
canvas2.lineTo(75, 300);
canvas2.stroke();

canvas2.beginPath();
canvas2.moveTo(100, 250);
canvas2.lineTo(125, 300);
canvas2.stroke();
/*persona 2*/
canvas2.beginPath();
canvas2.arc(300, 100, 20, 0, 2 * Math.PI, false);
canvas2.fill();
canvas2.stroke();

canvas2.beginPath();
canvas2.moveTo(300, 100);
canvas2.lineTo(300, 250);
canvas2.stroke();

canvas2.beginPath();
canvas2.moveTo(300, 150);
canvas2.lineTo(275, 175);
canvas2.stroke();

canvas2.beginPath();
canvas2.moveTo(300, 150);
canvas2.lineTo(325, 125);
canvas2.stroke();

canvas2.beginPath();
canvas2.moveTo(300, 250);
canvas2.lineTo(275, 300);
canvas2.stroke();

canvas2.beginPath();
canvas2.moveTo(300, 250);
canvas2.lineTo(325, 300);
canvas2.stroke();
/*persona 3*/
canvas2.beginPath();
canvas2.arc(500, 100, 20, 0, 2 * Math.PI, false);
canvas2.fill();
canvas2.stroke();

canvas2.beginPath();
canvas2.moveTo(500, 100);
canvas2.lineTo(500, 250);
canvas2.stroke();

canvas2.beginPath();
canvas2.moveTo(500, 150);
canvas2.lineTo(475, 200);
canvas2.stroke();

canvas2.beginPath();
canvas2.moveTo(500, 150);
canvas2.lineTo(525, 200);
canvas2.stroke();

canvas2.beginPath();
canvas2.moveTo(500, 250);
canvas2.lineTo(475, 300);
canvas2.stroke();

canvas2.beginPath();
canvas2.moveTo(500, 250);
canvas2.lineTo(525, 300);
canvas2.stroke();
