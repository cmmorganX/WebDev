import datetime

x = datetime.datetime.now()

print(x)


from datetime import date

print(date.today())

parsecs = 11
lightyears = parsecs * 3.26
print(str(parsecs) + " parsecs is " + str(lightyears) + " lightyears")

parsecs_input = input("Input number of parsecs:")
parsecs = int(parsecs_input)
lightyears = 3.26156 * parsecs

print(parsecs_input + " parsecs is " + str(lightyears) + " lightyears")

10 == 10
True
10 == 11
False
"jack" == "jack"
True
"jack" == "jake"
False

lang = 'Python'
nums = [1,2,3,4]
nums_dict = {'one':1,'two':2,'three':3}

print(type(nums))
print(type(lang))
print(type(nums_dict))

std = type('student', (object,), dict(name='John', age=12))

print('Type = ', type(std))
print('__name__ = ', std.__name__)
print('__bases__ = ', std.__bases__)
print('__dict__ = ', std.__dict__)