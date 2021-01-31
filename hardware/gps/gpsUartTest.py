from machine import UART
uart = UART(2, 9600)
uart.init(9600, bits=8, parity=None, stop=1)

while True:
    if uart.any():
        print(uart.read())
