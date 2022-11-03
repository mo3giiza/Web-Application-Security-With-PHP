# Untitled

**Download the image which contains GPS location data you can find it here: [*https://github.com/ze2paac/Web-Application-Security-With-PHP/blob/main/Geo-Location%20Disclosure/image/67-0_length_string.jpg*](https://github.com/ze2paac/Web-Application-Security-With-PHP/blob/main/Geo-Location%20Disclosure/image/67-0_length_string.jpg)**

**We can do our check using ExifTool to extract the metadata:**

```bash
┌─[azab@ze2pac]─[~/Desktop]
└──╼ $exiftool 67-0_length_string.jpg 
ExifTool Version Number         : 12.16
File Name                       : 67-0_length_string.jpg
Directory                       : .
File Size                       : 159 KiB
File Modification Date/Time     : 2022:11:03 17:16:55+02:00
File Access Date/Time           : 2022:11:03 17:16:55+02:00
File Inode Change Date/Time     : 2022:11:03 23:17:23+02:00
File Permissions                : rw-r--r--
File Type                       : JPEG
File Type Extension             : jpg
MIME Type                       : image/jpeg
JFIF Version                    : 1.01
Exif Byte Order                 : Big-endian (Motorola, MM)
Make                            : samsung
Camera Model Name               : SM-G930F
Orientation                     : Horizontal (normal)
X Resolution                    : 300
Y Resolution                    : 300
Resolution Unit                 : inches
Modify Date                     : 2016:09:12 10:05:31
Color Space                     : sRGB
Exif Image Width                : 4032
Exif Image Height               : 2012
GPS Version ID                  : 2.2.0.0
GPS Latitude Ref                : North
GPS Longitude Ref               : East
GPS Altitude Ref                : Above Sea Level
GPS Dilution Of Precision       : 0
GPS Img Direction Ref           : Magnetic North
GPS Img Direction               : 291.39
GPS Dest Latitude Ref           : North
XMP Toolkit                     : XMP Core 5.4.0
Current IPTC Digest             : d41d8cd98f00b204e9800998ecf8427e
IPTC Digest                     : d41d8cd98f00b204e9800998ecf8427e
Image Width                     : 4032
Image Height                    : 2012
Encoding Process                : Baseline DCT, Huffman coding
Bits Per Sample                 : 8
Color Components                : 3
Y Cb Cr Sub Sampling            : YCbCr4:4:0 (1 2)
Image Size                      : 4032x2012
Megapixels                      : 8.1
GPS Altitude                    : 340 m Above Sea Level
GPS Dest Latitude               : 0 deg 0' 0.00" N
GPS Latitude                    : 51 deg 1' 30.00" N
GPS Longitude                   : 7 deg 35' 31.00" E
GPS Position                    : 51 deg 1' 30.00" N, 7 deg 35' 31.00" E
```

**And this the GPS location data:**

```bash
GPS Altitude                    : 340 m Above Sea Level
GPS Dest Latitude               : 0 deg 0' 0.00" N
GPS Latitude                    : 51 deg 1' 30.00" N
GPS Longitude                   : 7 deg 35' 31.00" E
GPS Position                    : 51 deg 1' 30.00" N, 7 deg 35' 31.00" E
```
