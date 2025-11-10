class User:
    def solve(self, n):
        pass



class Student(User):
    pass



class Teacher(User):
    def check_solution(self, user, n):
        pass



class Admin(User):
    def edit(self, n):
        pass



class SuperAdmin(Admin):
    def grant(self, user):
        pass

student = Student()
teacher = Teacher()
admin = Admin()
super_admin = SuperAdmin()

student.solve(1)
teacher.solve(2)
admin.solve(3)
super_admin.solve(4)

teacher.check_solution(student, 1)

admin.edit(5)

super_admin.grant(student)