from machine import UART
from micropyGPS import MicropyGPS

uart = UART(2, baudrate=9600, bits=8,tx=17,rx=16,parity=None, stop=1)
gps = MicropyGPS()

buf = uart.readline()
print("Nmea data:")
print(buf)
for char in buf:
    gps.update(chr(char))  # Note the conversion to to chr, UART outputs
print('UTC Timestamp:', gps.timestamp)
print('Date:', gps.date_string('long'))
print('Latitude:', gps.latitude)
print('Longitude:', gps.longitude_string())
print('Horizontal Dilution of Precision:', gps.hdop)
print('Altitude:', gps.altitude)
print('Satellites:', gps.satellites_in_use)
print()
