def make_upper_print(original_print):
    def upper_print(*args):
        upper_args = [str(arg).upper() for arg in args]
        original_print(*upper_args)
    return upper_print

print = make_upper_print(print)

print('Нельзя ли потише?') 
print('hello', 'world')       
print(42, True)         
