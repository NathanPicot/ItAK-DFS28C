class Rencontre:
    def __init__(self, critique_rate, success_rate, failure_rate, fumble_rate, vitalite_loss, bonus_equipment):
        self.critique_rate = critique_rate
        self.success_rate = success_rate
        self.failure_rate = failure_rate
        self.fumble_rate = fumble_rate
        self.vitalite_loss = vitalite_loss
        self.bonus_equipment = bonus_equipment

    def calculate_rates(self, personnage):
        rates = {
            'critique': self.critique_rate,
            'success': self.success_rate,
            'failure': self.failure_rate,
            'fumble': self.fumble_rate
        }
        stats = personnage.get_stats()
        if stats['rapidite'] <= 5:
            rates['fumble'] += 5
        if stats['force'] >= 10:
            rates['critique'] += 5
        return rates
