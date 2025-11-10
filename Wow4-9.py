class Profile:
    def __init__(self, profession):
        self.profession = profession


    def info(self):
        return ''

    def describe(self):
        print(f"{self.profession} {self.info()}")




class Vacancy(Profile):
    def __init__(self, profession, salary):
        super().__init__(profession)
        self.salary = salary

    def info(self):
        return f"Предлагаемая зарплата: {self.salary}"



class Resume(Profile):
    def __init__(self, profession, experience):
        super().__init__(profession)
        self.experience = experience

    def info(self):
        return f"Стаж работы: {self.experience}"

vacancy = Vacancy("Python-разработчик", 150000)
vacancy.describe()  

resume = Resume("Python-разработчик", "3 года")
resume.describe()  
