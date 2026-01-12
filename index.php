import sys

def main():
    try:
        # Считываем два значения из stdin
        num1_str = input().strip()
        num2_str = input().strip()

        # Проверяем, что оба значения — целые числа
        try:
            num1 = int(num1_str)
        except ValueError:
            sys.stderr.write("Введите, пожалуйста, число\n")
            return

        try:
            num2 = int(num2_str)
        except ValueError:
            sys.stderr.write("Введите, пожалуйста, число\n")
            return

        # Проверяем, что второе число не равно нулю
        if num2 == 0:
            sys.stderr.write("Делить на 0 нельзя\n")
            return

        # Выполняем деление и выводим результат в stdout
        result = num1 / num2
        print(result)

    except EOFError:
        # Если input() не может считать данные (например, конец файла)
        sys.stderr.write("Ошибка ввода: не удалось считать данные\n")

if __name__ == "__main__":
    main()
