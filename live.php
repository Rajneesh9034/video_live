<?php
$rtspURL = 'rtsp://admin:@117.220.14.35:554/user=rvm0_password=rvm0_channel=1_stream=0.sdp';
$hlsFile = 'output.m3u8';

// Convert RTSP to HLS using FFmpeg
exec("ffmpeg -i $rtspURL -c:v copy -c:a aac -strict experimental -f hls $hlsFile");

// Output the HLS URL
echo $hlsFile;
?>
