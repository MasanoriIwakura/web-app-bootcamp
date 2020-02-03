class DiariesController < ApplicationController
  include Response
  include ExceptionHandler

  before_action :set_diary, only: [:show, :update, :destroy]

  def index
    @diaries = Diary.all
    json_response(@diaries)
  end

  def show
    json_response(@diary)
  end

  def create
    @diary = Diary.crate!(diary_params)
    json_response(@diary, :created)
  end

  def update
    @diary.update(diary_params)
    head :no_content
  end

  def destroy
    @diary.destroy(diary_params)
    head :no_content
  end

  private

  def diary_params
    params.permit(:title, :body)
  end

  def set_diary
    @diary = Diary.find(params[:id])
  end
end
