import subprocess

class GameMaster:
    def __init__(self, success_rate, critical_rate, fumble_rate):
        self.success_rate = success_rate
        self.critical_rate = critical_rate
        self.fumble_rate = fumble_rate

    def pleaseGiveMeACrit(self):
        try:
            result = subprocess.run(
                ['php', '../php/main.php', str(self.success_rate), str(self.critical_rate), str(self.fumble_rate)],
                capture_output=True,
                text=True,
                check=True
            )
            print("Subprocess output:", result.stdout)
            return result.stdout.strip()
        except subprocess.CalledProcessError as e:
            print("Error during subprocess execution:", e)
            print("Subprocess stderr:", e.stderr)
            return None
