class Personnage:
    def __init__(self, force, rapidite, intelligence, vitalite, classe, equipements=[]):
        self.force = force
        self.rapidite = rapidite
        self.intelligence = intelligence
        self.vitalite = vitalite
        self.classe = classe
        self.equipements = equipements

    def get_stats(self):
        stats = {
            'force': self.force,
            'rapidite': self.rapidite,
            'intelligence': self.intelligence,
            'vitalite': self.vitalite
        }
        for equip in self.equipements:
            for key, value in equip.get_modifiers().items():
                stats[key] += value
        return stats
