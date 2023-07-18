
EXPECTED_BAKE_TIME = 40
PREPARATION_PER_LAYER = 2

def bake_time_remaining(elapsed_bake_time):
    """
    :return: int - remaining bake time
    """
    return EXPECTED_BAKE_TIME - elapsed_bake_time


def preparation_time_in_minutes(number_of_layers):
    """
    :return: int - preparation time
    """
    return PREPARATION_PER_LAYER * number_of_layers


def elapsed_time_in_minutes(number_of_layers, elapsed_bake_time):
    """
    :return: int - total time elapsed
    """
    return preparation_time_in_minutes(number_of_layers) + elapsed_bake_time
