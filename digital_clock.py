################################################################################
# Script Name: DigitalClock.py
# Description: Description du script.
#
# Created by: Martin Lechêne
# Date: 19/07/2023
# Version: 1.0
#
################################################################################

from time import strftime
from tkinter import *
from tkinter.ttk import *

root = Tk()
root.title("Digital Clock")

# class Label(object):
# pass


def time():
    string = strftime("%H:%M:%S %p")
    label.config(text=string)
    label.after(1000, time)


label = Label(root,
              font=("ds-digital", 80),
              background="black",
              foreground="cyan")
label.pack(anchor="center")
time()

mainloop()
