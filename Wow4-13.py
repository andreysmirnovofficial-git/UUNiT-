import math

class Weapon:
    def __init__(self, name, damage, range):
        self.name = name
        self.damage = damage
        self.range = range

    def hit(self, actor, target):
        if not target.is_alive():
            print("Враг уже повержен")
            return

        distance = math.sqrt((actor.pos_x - target.pos_x) ** 2 + (actor.pos_y - target.pos_y) ** 2)
        if distance > self.range:
            print(f"Враг слишком далеко для оружия {self.name}")
            return

        print(f"Врагу нанесен урон оружием {self.name} в размере {self.damage}")
        target.get_damage(self.damage)

    def __str__(self):
        return self.name



class BaseCharacter:
    def __init__(self, pos_x, pos_y, hp):
        self.pos_x = pos_x
        self.pos_y = pos_y
        self.hp = hp

    def move(self, delta_x, delta_y):
        self.pos_x += delta_x
        self.pos_y += delta_y

    def is_alive(self):
        return self.hp > 0

    def get_damage(self, amount):
        self.hp -= amount

    def get_coords(self):
        return (self.pos_x, self.pos_y)



class BaseEnemy(BaseCharacter):
    def __init__(self, pos_x, pos_y, weapon, hp):
        super().__init__(pos_x, pos_y, hp)
        self.weapon = weapon

    def hit(self, target):
        if isinstance(target, MainHero):
            self.weapon.hit(self, target)
        else:
            print("Могу ударить только Главного героя")

    def __str__(self):
        return f"Враг на позиции ({self.pos_x}, {self.pos_y}) с оружием {self.weapon}"



class MainHero(BaseCharacter):
    def __init__(self, pos_x, pos_y, name, hp):
        super().__init__(pos_x, pos_y, hp)
        self.name = name
        self.weapons = []
        self.current_weapon_idx = None


    def hit(self, target):
        if not self.weapons:
            print("Я безоружен")
            return

        if not isinstance(target, BaseEnemy):
            print("Могу ударить только Врага")
            return

        current_weapon = self.weapons[self.current_weapon_idx]
        current_weapon.hit(self, target)

    def add_weapon(self, weapon):
        if not isinstance(weapon, Weapon):
            print("Это не оружие")
            return

        self.weapons.append(weapon)
        print(f"Подобрал {weapon}")

        if len(self.weapons) == 1:
            self.current_weapon_idx = 0

    def next_weapon(self):
        if not self.weapons:
            print("Я безоружен")
            return

        if len(self.weapons) == 1:
            print("У меня только одно оружие")
            return

        self.current_weapon_idx = (self.current_weapon_idx + 1) % len(self.weapons)
        current_weapon = self.weapons[self.current_weapon_idx]
        print(f"Сменил оружие на {current_weapon}")


    def heal(self, amount):
        self.hp = min(self.hp + amount, 200)  # макс. здоровье — 200
        print(f"Полечился, теперь здоровья {self.hp}")


weapon1 = Weapon("Короткий меч", 5, 1)
weapon2 = Weapon("Длинный меч", 7, 2)
weapon3 = Weapon("Лук", 3, 10)
weapon4 = Weapon("Лазерная орбитальная пушка", 1000, 1000)

princess = BaseCharacter(100, 100, 100) 
archer = BaseEnemy(50, 50, weapon3, 100)
armored_swordsman = BaseEnemy(10, 10, weapon2, 500)
main_hero = MainHero(0, 0, "Король Ночи", 200)  

target = BaseCharacter(1, 0, 10)
weapon1.hit(main_hero, target)

far_target = BaseCharacter(10, 10, 10)
weapon1.hit(main_hero, far_target)

print(weapon1) 
main_hero.move(5, -3)
print(main_hero.get_coords())  
print(main_hero.is_alive())  
main_hero.get_damage(50)
print(main_hero.hp)          
main_hero.get_damage(200)
print(main_hero.is_alive())   
print(archer) 
main_hero.hit(armored_swordsman)

main_hero.add_weapon(weapon1)
main_hero.hit(armored_swordsman)

main_hero.hit(princess)

main_hero.add_weapon(weapon4)

main_hero.next_weapon()

main_hero.weapons = [weapon1]
main_hero.current_weapon_idx = 0
main_hero.next_weapon()

main_hero.heal(50)

main_hero.add_weapon("не-оружие")

weapon1 = Weapon("Короткий меч", 5, 1)
weapon2 = Weapon("Длинный меч", 7, 2)
weapon3 = Weapon("Лук", 3, 10)
weapon4 = Weapon("Лазерная орбитальная пушка", 1000, 1000)

princess = BaseCharacter(100, 100, 100)
archer = BaseEnemy(50, 50, weapon3, 100)
armored_swordsman = BaseEnemy(10, 10, weapon2, 500)


archer.hit(armored_swordsman)  
armored_swordsman.move(10, 10)
print(armored_swordsman.get_coords()) 

main_hero = MainHero(0, 0, "Король Ночи", 200)
main_hero.hit(armored_swordsman)  
main_hero.next_weapon()         
main_hero.add_weapon(weapon1)    
main_hero.hit(armored_swordsman) 
main_hero.add_weapon(weapon4)    
main_hero.hit(armored_swordsman) 
main_hero.next_weapon()         
main_hero.hit(princess)          
main_hero.hit(armored_swordsman) 
main_hero.hit(armored_swordsman) 