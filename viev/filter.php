
<div class="modal fade filterUserModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myLargeModalLabel">Фильтр</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <hr>
        <br>
        <div class="forM" id="formFilter">
             <select name="position" id="position" required class="form-control">
                <option disabled value="none" selected>Должность</option>
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
            <br>
            <select name="subdivision" id="subdivision" required class="form-control">
                <option value="none" disabled selected>Подразделение</option>
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
            <br>
            <p></p>
            <button class="btn btn-primary" id="sendFilter">
                Применить
            </button>
        </div>
     
    </div>
  </div>
</div>