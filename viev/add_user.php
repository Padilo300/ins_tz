
<div class="modal fade addUserModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myLargeModalLabel">Добавить нового сотрудника</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <hr>
        <br>

        <form action="" method="POST" id="formAddUser" class="forM">
            <select name="position" id="" required class="form-control">
                <option disabled selected>Должность</option>
                <option value="Работник">
                    Работник
                </option>
                <option value="Руководитель подразделения">
                    Руководитель подразделения
                </option>
                <option value="Другой">
                    Другой
                </option>
            </select>

            <select name="subdivision" id="" required class="form-control">
                <option disabled selected>Подразделение</option>
                <option value="Front-end">
                    Front-end
                </option>
                <option value="Back-end">
                    Back-end
                </option>
                <option value="HR">
                    HR
                </option>
            </select>
            
            <p>
                <label for="firstname">Дата рождения: </label>
                <input type="date" name="birthday" required>
            </p>

            <p>
                <label for="firstname">В компаннии с: </label>
                <input type="date" name="dateStart" required>
            </p>

            <input type="text" name="firstName" placeholder="Имя" required>
            <input type="text" name="lastName" placeholder="Фамилия" required>
            <input type="text" name="patronymic" placeholder="Отчество" required>
            <input type="text" name="text" placeholder="Примечание">
            <button type="submit" id="btn"  class="btn btn-primary">
                отправить
            </button>
        </form>
    </div>
  </div>
</div>