class Animal:
    def breathe(self):
        pass

    def eat(self):
        pass



class Fish(Animal):
    def swim(self):
        pass



class Bird(Animal):
    def lay_eggs(self):
        pass



class FlyingBird(Bird):
    def fly(self):
        pass

animal = Animal()
fish = Fish()
bird = Bird()
flying_bird = FlyingBird()

animal.breathe()
animal.eat()

fish.breathe() 
fish.eat()    
fish.swim()   

bird.breathe()   
bird.eat()      
bird.lay_eggs() 

flying_bird.breathe()   
flying_bird.eat()       
flying_bird.lay_eggs()  
flying_bird.fly()       
