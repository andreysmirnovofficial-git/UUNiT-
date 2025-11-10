class Summator:
    def transform(self, n):
        return n

    def sum(self, N):
        return sum(self.transform(n) for n in range(1, N + 1))



class PowerSummator(Summator):
    def __init__(self, b):
        self.b = b

    def transform(self, n):
        return n ** self.b



class SquareSummator(PowerSummator):
    def __init__(self):
        super().__init__(2)



class CubeSummator(PowerSummator):
    def __init__(self):
        super().__init__(3)

s = Summator()
print(s.sum(5))

sq = SquareSummator()
print(sq.sum(5))

cu = CubeSummator()
print(cu.sum(5))

ps = PowerSummator(1.5)
print(ps.sum(5))  