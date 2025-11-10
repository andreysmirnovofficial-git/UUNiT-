def check_password(password):
    def decorator(func):
        def wrapper(*args, password_input=None, **kwargs):
            if password_input is None:
                password_input = input("Введите пароль: ").strip()
            
            
            if password_input == password:
                return func(*args, **kwargs)
            else:
                print("В доступе отказано")
                return None
        return wrapper
    return decorator


@check_password('secret123')
def make_burger(typeOfMeat, withOnion=False, withTomato=True):
    ingredients = [typeOfMeat]
    if withOnion:
        ingredients.append('лук')
    if withTomato:
        ingredients.append('помидор')
    return f"Бургер с {', '.join(ingredients)}"

result = make_burger('говядина', withOnion=True)
