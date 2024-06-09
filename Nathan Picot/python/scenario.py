import random
from rencontre import Rencontre

class Scenario:
    def __init__(self, rencontres):
        self.rencontres = rencontres
        self.completed_rencontres = []

    def start(self, personnage, game_master):
        while personnage.vitalite > 0 and len(self.rencontres) > 0:
            rencontre = random.choice(self.rencontres)
            rates = rencontre.calculate_rates(personnage)
            result = game_master.pleaseGiveMeACrit()
            if result == 'fumble':
                personnage.vitalite -= 2 * rencontre.vitalite_loss
            elif result == 'failure':
                personnage.vital
