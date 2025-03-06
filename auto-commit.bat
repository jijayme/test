@echo off
cd /d D:\wamp\www\myproj
git add .
git commit -m "Auto commit: %date% %time%"
git push origin master
