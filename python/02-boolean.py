# 1. Define if Pac-Man eats a ghost
def eat_ghost(has_power_pellet_active, is_touching_ghost):
    return has_power_pellet_active and is_touching_ghost

# 2. Define if Pac-Man scores
def score(is_touching_power_pellet, is_touching_dot):
    return is_touching_power_pellet or is_touching_dot

# 3. Define if Pac-Man loses
def lose(has_power_pellet_active, is_touching_ghost):
    return is_touching_ghost and not has_power_pellet_active

# 4. Define if Pac-Man wins
def win(has_eaten_all_dots, has_power_pellet_active, is_touching_ghost):
    return has_eaten_all_dots and not lose(has_power_pellet_active, is_touching_ghost)
